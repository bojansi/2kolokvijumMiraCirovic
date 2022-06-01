<?php
    
    require_once 'telefonController.php';
    $action = isset($_REQUEST['action'])?$_REQUEST['action']:'';

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            switch($action){
                case 'forma':
                    include_once '../public/telefonForma.php';
                    break;
                case 'logout':
                    $sc = new telefonController();
                    $sc->logoutTelefon();
                    break;
            }
            break;
        case 'POST':
            switch ($action) {
                case 'Posalji':
                    $sc = new telefonController();
                    $sc->inserTelefon();
                    break;
            }
    }

?>