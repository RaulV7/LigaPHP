<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Jornada SU</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="#" method="POST">
      <table align="center" border="1">
        <tr>
            <td>Id Jugador</td>
            <td><input type="text" name="idJug"></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td><input type="text" name="ape"></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><input type="text" name="edad"></td>
        </tr>
        <tr>
            <td>Nacionalidad</td>
            <td><input type="text" name="nac"></td>
        </tr>
        <tr>
            <td>Posicion</td>
            <td><input type="text" name="pos"></td>
        </tr>
        <tr>
            <td>Id Equipo</td>
            <td><input type="text" name="idEq"></td>
        </tr>
        <tr>
          <td>Id Jugador</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Edad</td>
          <td>Nacionalidad</td>
          <td>Posicion</td>
          <td>Id Equipo</td>
        </tr>
        <?php
        foreach ($datos2 as $dato) {
          echo "<tr><td>".$dato['idJugador']."</td>";
          echo "<td>".$dato['nombre']."</td>";
          echo "<td>".$dato['apellido']."</td>";
          echo "<td>".$dato['edad']."</td>";
          echo "<td>".$dato['nacionalidad']."</td>";
          echo "<td>".$dato['posicion']."</td>";
          echo "<td>".$dato['idEquipo']."</td>";
        }
        ?>
        <tr>
        <center>
            <input type="submit" value="Agregar Jugador" name="btn2">
            <input type="submit" value="Eliminar" name="btn2">
            <input type="submit" value="Modificar" name="btn2">
        </center>
        </tr>
      </table>
    </form>
  </body>
</html>
