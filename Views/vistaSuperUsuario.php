<html>
    <head>
        <title>Tabla de posiciones</title>
    </head>
    <body>

        <form action="#" method="POST">
            <table align="center" border="1">
                <h1>Tabla de posiciones</h1>
                <tr>
                    <td>Id Equipo</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nom"></td>
                </tr>
                <tr>
                    <td>Id Equipo</td>
                    <td>Equipo</td>
                    <td>PJ</td>
                    <td>G</td>
                    <td>E</td>
                    <td>P</td>
                    <td>GF</td>
                    <td>GC</td>
                    <td>+/-</td>
                    <td>Pts</td>
                </tr>
                <?php
                foreach ($datos as $dato){
                    echo "<tr><td>".$dato['idEquipo']."</td>";
                    echo "<td>".$dato['nombre']."</td>";
                    echo "<td>".$dato['PJ']."</td>";
                    echo "<td>".$dato['PG']."</td>";
                    echo "<td>".$dato['PE']."</td>";
                    echo "<td>".$dato['PP']."</td>";
                    echo "<td>".$dato['GF']."</td>";
                    echo "<td>".$dato['GC']."</td>";
                    echo "<td>".$dato['DG']."</td>";
                    echo "<td>".$dato['puntos']."</td></tr>";
                }
                ?>
                <tr>
                <center>
                    <input type="submit" value="Agregar Equipo" name="btn">
                    <input type="submit" value="Eliminar" name="btn">
                    <input type="submit" value="Modificar" name="btn">
                </center>
                </tr>
            </table>
            <br><br>
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
