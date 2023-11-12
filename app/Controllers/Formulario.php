<?php

namespace App\Controllers;

class Formulario extends BaseController {

    public function index() {
        return view('formulario');
    }

    public function login()
    {
        $request = service('request');

        if ($request->getMethod() === 'post') {
            $nombre = $request->getVar('nombre');
            $correo = $request->getVar('correo');
            $rol = $request->getVar('rol');


            session()->set('formularioData', [
                'nombre' => $nombre,
                'correo' => $correo,
                'rol' => $rol
            ]);
            return redirect()->to('home');
        }
        return view('/perfil');
    }
}