<?php
    require_once 'TelefonDAO.php';
    session_start();
    class telefonController{

        function inserTelefon(){

            $marka = isset($_POST['marka'])?$_POST['marka']:'';
            $cena = isset($_POST['cena'])?$_POST['cena']:'';

            if(!empty($marka) && !empty($cena)){
                
                $dao = new TelefonDAO();
                $dao->insertTelefon($marka, $cena);

                $telefoni = $dao->getTelefon($marka, $cena);
                $_SESSION['telefon'] = $telefoni;
                include_once '../public/prikaz.php';
            
            }else{
                $msg = 'Sva polja moraju biti popunjena!';
                include_once '../public/telefonForma.php';
            }

        }

        function logoutTelefon(){
            if(isset($_SESSION['felefon'])){
                session_unset();
                session_destroy();
                include_once '../index.php';
            }
        }

    }
?>