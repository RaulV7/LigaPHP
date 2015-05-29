<?php

class Jornada {
    private $_idJornada;
    private $_fecha;
    private $_resultado1;
    private $_resultado2;
    private $_resultado3;
    private $_resultado4;
    private $_resultado5;
    
    public function __construct() {
        
    }
        
    function getIdJornada() {
        return $this->_idJornada;
    }

    function getFecha() {
        return $this->_fecha;
    }

    function getResultado1() {
        return $this->_resultado1;
    }

    function getResultado2() {
        return $this->_resultado2;
    }

    function getResultado3() {
        return $this->_resultado3;
    }

    function getResultado4() {
        return $this->_resultado4;
    }

    function getResultado5() {
        return $this->_resultado5;
    }

    function setIdJornada($_idJornada) {
        $this->_idJornada = $_idJornada;
    }

    function setFecha($_fecha) {
        $this->_fecha = $_fecha;
    }

    function setResultado1($_resultado1) {
        $this->_resultado1 = $_resultado1;
    }

    function setResultado2($_resultado2) {
        $this->_resultado2 = $_resultado2;
    }

    function setResultado3($_resultado3) {
        $this->_resultado3 = $_resultado3;
    }

    function setResultado4($_resultado4) {
        $this->_resultado4 = $_resultado4;
    }

    function setResultado5($_resultado5) {
        $this->_resultado5 = $_resultado5;
    }


    
        
}
