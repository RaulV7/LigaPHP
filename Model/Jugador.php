<?php

class Jugador extends Equipo{
    private $_idJugador;
    private $_nombre;
    private $_apelido;
    private $_edad;
    private $_nacionalidad;
    private $_posicion;
    private $_idEquipo;
    
    public function __construct() {
        
    }
    
    public function getIdJugador() {
        return $this->_idJugador;
    }

    public function getNombre() {
        return $this->_nombre;
    }

    public function getApelido() {
        return $this->_apelido;
    }

    public function getEdad() {
        return $this->_edad;
    }

    public function getNacionalidad() {
        return $this->_nacionalidad;
    }

    public function getPosicion() {
        return $this->_posicion;
    }

    public function getIdEquipo() {
        return $this->_idEquipo;
    }

    public function setIdJugador($_idJugador) {
        $this->_idJugador = $_idJugador;
    }

    public function setNombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function setApelido($_apelido) {
        $this->_apelido = $_apelido;
    }

    public function setEdad($_edad) {
        $this->_edad = $_edad;
    }

    public function setNacionalidad($_nacionalidad) {
        $this->_nacionalidad = $_nacionalidad;
    }

    public function setPosicion($_posicion) {
        $this->_posicion = $_posicion;
    }

    public function setIdEquipo($_idEquipo) {
        $this->_idEquipo = $_idEquipo;
    }


}
