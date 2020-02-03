<?php

    /**
     * Clase Pelicula
     * @author Riddick
     */

Class Butaca{

    /**
     * Propiedades
     * @var char $_letra
     * @var char $_fila Integer
     * @var Espectador $_espectador
     */

    private $_fila;
    private $_letra;
    private $_espectador;

    /**
     * Constructor Butaca
     * @param Char $_letra
     * @param Int $_fila
     */

    public function __construct($fila,$letra){
        $this->_fila = $fila;
        $this->_letra = $letra;
        $this->_espectador = null;
    }

    /**
     * Indica si el asiento está ocupado
     * @return $_letra
     */

    public function ocupado(){
        return !is_null($this->_espectador);
    }
    
    public function getEspectador(){
        return $this->_espectador;
    }

    public function setEspectador(Espectador $espectador){//no es obligatorio
        $this->_espectador = $espectador;
    }


}