<?php

class Plane
{
    private $marka;
    private $model;
    private $rocznik;
    private $zastosowanie;
    private $cena;

    private $image;
    public function __construct($marka, $cena, $zastosowanie, $rocznik, $model, $image)
    {
        $this->marka = $marka;
        $this->cena = $cena;
        $this->zastosowanie = $zastosowanie;
        $this->rocznik = $rocznik;
        $this->model = $model;
        $this->image = $image;
    }

    public function getCena()
    {
        return $this->cena;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }


    public function setCena($cena)
    {
        $this->cena = $cena;
    }


    public function getZastosowanie()
    {
        return $this->zastosowanie;
    }


    public function setZastosowanie($zastosowanie)
    {
        $this->zastosowanie = $zastosowanie;
    }


    public function getRocznik()
    {
        return $this->rocznik;
    }

    public function setRocznik($rocznik)
    {
        $this->rocznik = $rocznik;
    }


    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model)
    {
        $this->model = $model;
    }


    public function getMarka()
    {
        return $this->marka;
    }


    public function setMarka($marka)
    {
        $this->marka = $marka;
    }


}