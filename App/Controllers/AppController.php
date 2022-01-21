<?php

namespace App\Controllers;

use MF\Controller\Action;

class AppController extends Action
{

    public function timeline(){
        session_start();

        if ($_SESSION['id'] != '' && $_SESSION['nome'] != ''){
           echo 'Autenticado';
        }else {
            header('Location: /');
        }
    }


}