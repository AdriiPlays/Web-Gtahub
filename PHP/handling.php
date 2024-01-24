<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Handling</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>

</head>

<style>

table {
	
    margin: 0 auto;
	
    border-collapse: collapse;
    color:black;
   
}

td,th{ background-color: white;
}

header {

	background-color: #242424;

	padding-top: 10px;

}



.logo1 {

  width: 200px;

  height: 200px;

  float: left;

}



.logo2 {

	width: 200px;

	height: 200px;

	float: right;

  }

.letras {

	padding-bottom:1px;

  



}


</style>
<body background="fondo.jpeg">

  <header>
      <a href="..\index.html"><img src="..\IMG/gta.png" class="logo1"></a> <!--Logo-->
      <a href="..\index.html"><img src="..\IMG/logo3.png" class="letras"></a><!--Letras-->
      <a href="..\index.html"><img src="..\IMG/gta.png" class="logo2"></a><!--Logo-->

    </header>
    <br>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>DLC</th>
           
        </tr>
        <?php
            $archivo = simplexml_load_file("handling.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "update.rpf" . "</td>";
                echo "</tr>";
            }
        ?>
          <?php
            $archivo = simplexml_load_file("mpapartment.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpapartment" . "</td>";
                echo "</tr>";
            }
        ?>
         <?php
            $archivo = simplexml_load_file("mpassault.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpassault" . "</td>";
                echo "</tr>";
            }
        ?>
            <?php
            $archivo = simplexml_load_file("mpbattle.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpbattle" . "</td>";
                echo "</tr>";
            }
        ?>
              <?php
            $archivo = simplexml_load_file("mpbiker.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpbiker" . "</td>";
                echo "</tr>";
            }
        ?>

           <?php
            $archivo = simplexml_load_file("mpchristmas2.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpchristmas2" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpchristmas2017.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpchristmas2017" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpchristmas2018.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpchristmas2018" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpexecutive.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpexecutive" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpg9ec.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpg9ec" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpgunrunning.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpgunrunning" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mphalloween.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mphalloween" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpheist.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpheist" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpheist3.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpheist3" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpheist4.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpheist4" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpimportexport.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpimportexport" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpchristmas2.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpchristmas2" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpjanuary2016.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpjanuary2016" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mplowrider.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mplowrider" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mplowrider2.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mplowrider2" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpluxe.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpluxe" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpluxe2.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpluxe2" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpsecurity.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpsecurity" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpsmuggler.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpsmuggler" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpspecialraces.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpspecialraces" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpstunt.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpstunt" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpsum.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpsum" . "</td>";
                echo "</tr>";
            }
        ?>
             <?php
            $archivo = simplexml_load_file("mpsum2.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpsum2" . "</td>";
                echo "</tr>";
            }
        ?>
       
             <?php
            $archivo = simplexml_load_file("mpsum2_g9ec.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpsum2_g9ec" . "</td>";
                echo "</tr>";
            }
        ?>
       
             <?php
            $archivo = simplexml_load_file("mptuner.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mptuner" . "</td>";
                echo "</tr>";
            }
        ?>
         
             <?php
            $archivo = simplexml_load_file("mpvalentines2.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpvalentines2" . "</td>";
                echo "</tr>";
            }
        ?>
        
             <?php
            $archivo = simplexml_load_file("mpvinewood.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpvinewood" . "</td>";
                echo "</tr>";
            }
        ?>
        
             <?php
            $archivo = simplexml_load_file("mpxmas_604490.meta");
            $vehiculos = $archivo->HandlingData->Item;

            foreach ($vehiculos as $vehiculo) {
                $nombre = $vehiculo->handlingName;

                echo "<tr>";
                echo "<td>" . $nombre . "</td>"; 
                echo "<td>" . "mpxmas_604490" . "</td>";
                echo "</tr>";
            }
        ?>
      
    </table>
</body>
</html>