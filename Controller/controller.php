<?php
require '/Model/Equipo.php';
require '/Model/Jugador.php';
require '/Model/Jornada.php';
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
if (isset($_POST['btn2'])) {
  $btn2 = $_POST["btn2"];
  if ($btn2 == "Agregar Jugador") {
    $jug = new Jugador();
    $idJug = $_POST["idJug"];
    $nom = $_POST["nombre"];
    $ape = $_POST["ape"];
    $edad = $_POST["edad"];
    $nac = $_POST["nac"];
    $pos = $_POST["pos"];
    $idEq = $_POST["idEq"];
    $jug->setIdJugador($idJug);
    $jug->setNombre($nom);
    $jug->setApelido($ape);
    $jug->setEdad($edad);
    $jug->setNacionalidad($nac);
    $jug->setPosicion($pos);
    $jug->setIdEquipo($idEq);
    $jug->agregarDatos($idJug,$nom,$ape,$edad,$nac,$pos,$idEq);
  }elseif ($btn2 == "Eliminar") {
    $jug = new Jugador();
    $idJug = $_POST["idJug"];
    $jug->eliminarDatos($idJug);
  }elseif ($btn2 == "Modificar") {
    $jug = new Jugador();
    $idJug = $_POST["idJug"];
    $nom = $_POST["nombre"];
    $ape = $_POST["ape"];
    $edad = $_POST["edad"];
    $nac = $_POST["nac"];
    $pos = $_POST["pos"];
    $idEq = $_POST["idEq"];
    $jug->setIdJugador($idJug);
    $jug->setNombre($nom);
    $jug->setApelido($ape);
    $jug->setEdad($edad);
    $jug->setNacionalidad($nac);
    $jug->setPosicion($pos);
    $jug->setIdEquipo($idEq);
    $jug->modificarDatos($nom,$ape,$edad,$nac,$pos,$idEq,$idJug);
  }

}
if (isset($_POST["btn3"])) {
  $btn3 = $_POST["btn3"];
  if ($btn3 == 'Agregar Jornada') {
    $jor = new Jornada();
    $idJor = $_POST["idJor"];
    $fe = $_POST["fe"];
    $r1 = $_POST["r1"];
    $r2 = $_POST["r2"];
    $r3 = $_POST["r3"];
    $r4 = $_POST["r4"];
    $r5 = $_POST["r5"];
    $jor->setIdJornada($idJor);
    $jor->setFecha($fe);
    $jor->setResultado1($r1);
    $jor->setResultado1($r2);
    $jor->setResultado1($r3);
    $jor->setResultado1($r4);
    $jor->setResultado1($r5);
    $jor->agregarDatos($idJor, $fe, $r1,$r2,$r3,$r4,$r5);

  }elseif ($btn3 == 'Eliminar') {
    $jor = new Jornada();
    $idJor = $_POST["idJor"];
    $jor -> eliminarDatos($idJor);
  }
}

$equipo = new Equipo();
$datos = $equipo->mostrarDatos();
$jugador = new Jugador();
$datos2 = $jugador->mostrarDatos();
$jornada = new Jornada();
$datos3 = $jornada->mostrarDatos();

require 'Views/vistaSuperUsuario.php';
require 'Views/vistaJornadaSU.php';
require 'Views/vistaJugadorSU.php';
