<?php

namespace App\Controllers;

class Formulario extends BaseController {

    public function index() {
        return view('formulario');
    }

    public function procesarFormulario()
    {
        $request = service('request');

        if ($request->getMethod() === 'post') {
            $nombre = $request->getVar('nombre');
            $correo = $request->getVar('correo');
            $rol = $request->getVar('rol');


            session()->set('formulario_data', [
                'nombre' => $nombre,
                'correo' => $correo,
                'rol' => $rol
            ]);
            return redirect()->to('/perfil');
        }
    }
}