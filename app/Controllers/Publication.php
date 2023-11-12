<?php
namespace App\Controllers;

use App\Models\PublicationModel;
 class Publication extends BaseController {
     public function Index()
     {
        $model = new PublicationModel();
        $data['posts'] = $model->get();

        return view('publication/all', $data);
     }
 }