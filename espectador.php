<?php

/**Clase espectador, lleva todo lo relativo a la información
* @author toniuep
*/

Class Espectador{
    //propiedades
    private $_nombre;
    private $_edad;
    private $_dinero;

    public function __construct($nombre, $edad = null, $dinero = 0){
        $this->_nombre = $nombre;
        $this->_edad = $edad;
        $this->_dinero = $dinero;
    }

    public function setNombre($nombre){
        $this->_nombre = $nombre;
    }

    public function getNombre(){
        return $this->_nombre;
    }

    public function setEdad($edad){
        $this->_edad = $edad;
    }

    public function getEdad(){
        return $this->_edad;
    }

    public function setDinero($dinero){
        $this->_dinero = $dinero;
    }

    public function getDinero(){
        return $this->_dinero;
    }

    /** pagar entrada
     * @param $precio
     */

    public function pagar($precio){
        //devolverá de esta forma un valor negativo si el dinero es menor
        return $this->_dinero -= $precio;
    }
    public function tieneEdad($edadMinima){
        //devolvera verdadero o falso si no tiene la edad minima
        return $this->_edad < $edadMinima;
    }

    public function tieneDinero($precioEntrada){
        return $this->_dinero > $precioEntrada;
    }

    public function info(){
        //imprime info del Espectador
    }
}

