<?php

require_once "butaca.php";

Class Cine{
    private $_butacas;
    private $_pelicula;
    private $_filas;
    private $_columnas;
    private $_precio;

    public function __construct ($filas, $columnas, $precio, $pelicula){
        $this->_filas = $filas;
        $this->_columnas = $columnas;
        $this->_precio = $precio;
        $this->_pelicula = $pelicula;
        //$this->_rellenarButacas();
        $this->llenarArrayConButacas();
    }

    public function setButacas($butacas){
        $this->_butacas = $butacas;
    }

    public function getButacas(){
        return $this->_butacas;
    }

    public function getNombre(){
        return $this->_nombre;
    }

    public function setFilas($filas){
        $this->_filas = $filas;
    }

    public function getFilas(){
        return $this->_filas;
    }

    public function setColumnas($columnas){
        $this->_columnas = $columnas;
    }

    public function getColumnas(){
        return $this->_columnas;
    }

    public function setPrecio($precio){
        $this->_precio = $precio;
    }

    public function getPrecio(){
        return $this->_precio;
    }

    public function setPelicula(Pelicula $pelicula){
        $this->_pelicula = $pelicula;
    }

    public function getPelicula(){
        return $this->_pelicula;
    }

    private function llenarArrayConButacas(){
        for ($i=0; $i < $this->_filas; $i++) { 
            for ($j=0; $j < $this->_columnas; $j++){
                $this->_butacas [$i][$j] = new Butaca($i+1, $j+1);
            }
        }

    }


}