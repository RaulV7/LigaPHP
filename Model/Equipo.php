<?php

class Equipo {
     private $_idEquipo;
     private $_nombre;
     private $_PJ;
     private $_PG;
     private $_PE;
     private $_PP;
     private $_GF;
     private $_GC;
     private $_DG;
     private $_puntos;
     
     function getIdEquipo() {
         return $this->_idEquipo;
     }

     function getNombre() {
         return $this->_nombre;
     }

     function getPJ() {
         return $this->_PJ;
     }

     function getPG() {
         return $this->_PG;
     }

     function getPE() {
         return $this->_PE;
     }

     function getPP() {
         return $this->_PP;
     }

     function getGF() {
         return $this->_GF;
     }

     function getGC() {
         return $this->_GC;
     }

     function getDG() {
         return $this->_DG;
     }

     function getPuntos() {
         return $this->_puntos;
     }

     function setIdEquipo($idEquipo) {
         $this->_idEquipo = $idEquipo;
     }

     function setNombre($nombre) {
         $this->_nombre = $nombre;
     }

     function setPJ($PJ) {
         $this->_PJ = $PJ;
     }

     function setPG($PG) {
         $this->_PG = $PG;
     }

     function setPE($PE) {
         $this->_PE = $PE;
     }

     function setPP($PP) {
         $this->_PP = $PP;
     }

     function setGF($GF) {
         $this->_GF = $GF;
     }

     function setGC($GC) {
         $this->_GC = $GC;
     }

     function setDG($DG) {
         $this->_DG = $DG;
     }

     function setPuntos($puntos) {
         $this->_puntos = $puntos;
     }


}
