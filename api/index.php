<?php
require 'flight/Flight.php';
require_once '../student/TelefontDAO.php';


Flight::route('/', function(){
    echo 'Pozdrav!';
});


Flight::route('GET /telefoni/@marka/@cena', function($marka, $cena){
    $dao = new TelefonDAO();
    echo json_encode($dao->getTelefon($marka, $cena));
});

Flight::route('POST /telefon/', function(){
    $dao = new TelefonDAO();
    $marka = Flight::request()->data->marka;
    $cena = Flight::request()->data->cena;
    echo json_encode($dao->insertTelefon($marka, $cena));
});

Flight::start();
