<?php

class Pelicula{
    private $_titulo;
    private $_duracion;
    private $_edadMin;
    private $_director;

    public function __construct($titulo, $duracion, $edadMin, $director){
        $this->_titulo = $titulo;
        $this->_duracion = $duracion;
        $this->_edadMin = $edadMin;
        $this->_director = $director;
    }

    public function setTitulo($titulo){
        $this->_titulo = $titulo;
    }

    public function getTitulo(){
        return $this->_titulo;
    }

    public function setDuracion($duracion){
        $this->_duracion = $duracion;
    }

    public function getDuracion(){
        return $this->_duracion;
    }

    public function setEdadMin($edadMin){
        $this->_edadMin = $edadMin;
    }

    public function getEdadMin(){
        return $this->_edadMin;
    }

    public function setDirector($director){
        $this->_director = $director;
    }

    public function getDirector(){
        return $this->_director;
    }

    public function info (){
        //imprime la información de la película
        $info = "{$this->_titulo} del director {$this->_director} ,
        duracion {$this->_duracion} minutos. Edad {$this->_edadMin} años<br><br>";

        return $info;
    }
}