<?php
namespace App\Controllers;

use App\Models\PublicationModel;
class Documents extends BaseController {
    public function index()
    {
        if ($this->request->getMethod() === 'post') {
            $file = $this->request->getFile('documento');

            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads', $newName);
            }
        }
        $documents = $this->getDocumentList();

        return view('documents', ['documents' => $documents]);
    }

    public function deleteDocument($filename)
    {
        $documentPath = ROOTPATH . 'public/uploads/' . $filename;

        if (file_exists($documentPath)) {
           unlink($documentPath);
        }
        return redirect()->to('documents');
    }

    private function getDocumentList()
    {
        $documentPath = ROOTPATH . 'public/uploads';
        $documents = [];

        if (is_dir($documentPath)) {
            $files = scandir($documentPath);

            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $documents[] = $file;
                }
            }
        }
        return $documents;
    }
}