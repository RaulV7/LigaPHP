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
     
     public function __construct() {
         $this->bd=  Conectar::conexion();
     }


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

     public function setIdEquipo($_idEquipo) {
         $this->_idEquipo = $_idEquipo;
     }

     public function setNombre($_nombre) {
         $this->_nombre = $_nombre;
     }

     public function setPJ($_PJ) {
         $this->_PJ = $_PJ;
     }

     public function setPG($_PG) {
         $this->_PG = $_PG;
     }

     public function setPE($_PE) {
         $this->_PE = $_PE;
     }

     public function setPP($_PP) {
         $this->_PP = $_PP;
     }

     public function setGF($_GF) {
         $this->_GF = $_GF;
     }

     public function setGC($_GC) {
         $this->_GC = $_GC;
     }

     public function setDG($_DG) {
         $this->_DG = $_DG;
     }

     public function setPuntos($_puntos) {
         $this->_puntos = $_puntos;
     }
     public function mostrarDatos(){
		$consulta=$this->bd->query("SELECT * FROM equipo");
		while($filas=$consulta->fetch_assoc()){
   		$this->equipo[]=$filas;
   	}
           return $this->equipo;
     }
    public function agregarDatos($_nombre,$_PJ,$_PG,$_PE,$_PP,$_GF,$_GC,$_DG,$_puntos){
   		$consulta=$this->bd->query("INSERT INTO alumno VALUES ($_carnet,'$_nombre',$_edad,'$_carrera','$_genero', $_cum);");
   		print("<script>alert('Datos insertados exitosamente.')</script>");


    }
}