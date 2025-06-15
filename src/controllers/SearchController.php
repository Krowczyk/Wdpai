<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Plane.php';
class SearchController extends AppController
{
    public function search() {

        $plane = new Plane('Airbus','10000000','Publiczne','2006','A340');

        $marka = $_POST['marka'];
        $cena = $_POST['cena'];
        $zastosowanie = $_POST['zastosowanie'];
        $rocznik = $_POST['rocznik'];
        $model = $_POST['model'];

    }

    public function addprojects() {
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/addprojects");
    }

}