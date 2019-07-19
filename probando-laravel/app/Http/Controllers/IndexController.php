<?php

namespace App\Http\Controllers;

use Illiminate\Http\Request;

class IndexController extends Controller{


    public function welcome(){

        return view ("welcome");

    }

    public function inicio(){

        return view ("index");

    }



    public function contacto(){

        return view ("contacto");
    }




    public function iniciarsesion(){

        return view ("quienessomos");

    }




    public function registrarse(){

        return view ("registrarse");

    }


    public function admin(){

        return view ("admin");

    }

    public function registeruser(){

        return view ("registeruser");

    }

    public function loginuser(){

        return view ("loginuser");

    }


}

?>
