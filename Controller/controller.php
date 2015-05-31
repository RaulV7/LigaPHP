<?php
require 'Model/Equipo.php';
if (isset($_POST["btn"])){
    $btn = $_POST["btn"];
    if ($btn == "Agregar Equipo") {
        $eq = new Equipo();
        $nom = $_POST["nom"];
        $pj = $_POST["pj"];
        $pg = $_POST["pg"];
        $pe = $_POST["pe"];
        $pp = $_POST["pp"];
        $gf = $_POST["gf"];
        $gc = $_POST["gc"];
        $dif = $gf - $gc;
        
        
    }
    
}
$equipo = new Equipo();
$datos = $equipo->mostrarDatos();
require 'Views/vistaSuperUsuario.php';

