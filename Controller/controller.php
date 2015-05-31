<?php
require 'Model/Equipo.php';
if (isset($_POST["btn"])){
    $btn = $_POST["btn"];
    if ($btn == "Agregar Equipo") {
        $eq = new Equipo();
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $pj = 0;
        $pg = 0;
        $pe = 0;
        $pp = 0;
        $gf = 0;
        $gc = 0;
        $dif = 0;
        $pts = 0;
        $eq ->setIdEquipo($id);
        $eq->setNombre($nom);
        $eq->setPJ(0);
        $eq->setPG(0);
        $eq->setPE(0);
        $eq->setPP(0);
        $eq->setGF(0);
        $eq->setGC(0);
        $eq->setDG(0);
        $eq->setPuntos(0);
        $eq->agregarDatos($id,$nom,$pj,$pg,$pe,$pp,$gf,$gc,$dif,$pts);
    }elseif ($btn == "Eliminar") {
        $eq = new Equipo();
        $id = $_POST["id"];
        $eq->eliminarDatos($id);
    }elseif ($btn == "Modificar") {
        $eq = new Equipo;
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $pj = 0;
        $pg = 0;
        $pe = 0;
        $pp = 0;
        $gf = 0;
        $gc = 0;
        $dif = 0;
        $pts = 0;
        $eq ->setIdEquipo($id);
        $eq->setNombre($nom);
        $eq->setPJ(0);
        $eq->setPG(0);
        $eq->setPE(0);
        $eq->setPP(0);
        $eq->setGF(0);
        $eq->setGC(0);
        $eq->setDG(0);
        $eq->setPuntos(0);
        $eq->modificarDatos($nom, $pj, $pg, $pe, $pp, $gf, $gc, $dif, $pts, $id);
    }
}

$equipo = new Equipo();
$datos = $equipo->mostrarDatos();
require 'Views/vistaSuperUsuario.php';

