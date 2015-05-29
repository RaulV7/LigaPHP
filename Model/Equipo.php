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
     
     public function getIdEquipo() {
         return $this->_idEquipo;
     }

     public function getNombre() {
         return $this->_nombre;
     }

     public function getPJ() {
         return $this->_PJ;
     }

     public function getPG() {
         return $this->_PG;
     }

     public function getPE() {
         return $this->_PE;
     }

     public function getPP() {
         return $this->_PP;
     }

     public function getGF() {
         return $this->_GF;
     }

     public function getGC() {
         return $this->_GC;
     }

     public function getDG() {
         return $this->_DG;
     }

     public function getPuntos() {
         return $this->_puntos;
     }

     public function setIdEquipo($idEquipo) {
         $this->_idEquipo = $idEquipo;
     }

     public function setNombre($nombre) {
         $this->_nombre = $nombre;
     }

     public function setPJ($PJ) {
         $this->_PJ = $PJ;
     }

     public function setPG($PG) {
         $this->_PG = $PG;
     }

     public function setPE($PE) {
         $this->_PE = $PE;
     }

     public function setPP($PP) {
         $this->_PP = $PP;
     }

     public function setGF($GF) {
         $this->_GF = $GF;
     }

     public function setGC($GC) {
         $this->_GC = $GC;
     }

     public function setDG($DG) {
         $this->_DG = $DG;
     }

     public function setPuntos($puntos) {
         $this->_puntos = $puntos;
     }

}
