<?php

namespace App\Controllers;

class Perfil extends BaseController {

    public function index() {
        // Recuperar los datos de la sesión
        $formularioData = session()->get('formularioData');

        // Mostrar la vista y pasar los datos
        return view('perfil', ['formularioData' => $formularioData]);
    }
}