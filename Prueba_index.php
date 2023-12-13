<?php
include "./conection.php";
//$result = $conection->query("SELECT * FROM Rutas ");
//$result2 = $conection->query("SELECT * FROM Conductores ");
//$result3 = $conection->query("SELECT * FROM Carros ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
    <title>Init_Program.php_Fetch</title>
</head>

<body>

    <header>
       <h1>  Base de Datos de Transporte Terrestre Operación General</h1>
    </header>

    <main>
        <h2>Base de datos de Rutas</h2>

    <form action="" method= "get">

    <input type="text" name="Busqueda">
    <input type="Submit" Value="Send Master" name="Button">

    <select name="Selection" id="Selection" name ="Selection">
         <option value="Defoult"></option>
         <option value="Tabla_de_usuarios">Conductores</option>
         <option value="Tabla_de_Carros">Automóviles</option>
    </select>
    <button>Slct</button>
    <?php
 //   $_GET["Selection"] = $Selection;
   // if($Selection == "Conductores"){
        ?> 
       <!---   <a href="./index2.php"> <i class="fa-solid fa-microchip fa-spin fa-spin-reverse"></i></a>--->
        <?php
    //}else if($Selection == "Tabla_de_Carros"){
        ?>
       <!---   <a href="./index3.php"> <i class="fa-solid fa-microchip fa-spin fa-spin-reverse"></i></a>--->
        <?php
    //}
    ?>
    <?php
    ?>
    <?php
    
if($_GET["Selection"] == "Tabla_de_usuarios"){
        ?>
     <a href="./index2.php"> <i class="fa-solid fa-object-ungroup fa-beat"></i></a> 
        <?php
   }

   else if ($_GET["Selection"] == "Tabla_de_Carros"){
        ?>
      <a href="./index3.php"> <i class="fa-solid fa-object-ungroup fa-beat"></i></a> 
        <?php
   }
   else {
      
    echo"";
     ?>
        <?php
    }
    ?>
    <table>
    <thead>
           
            <th>ID Ruta</th>
            <th>Tiempo Recorrido</th>
            <th>Tipo de Vehiculo</th>
            <th>Tipo de Terreno</th>
            <th>Nombre Ruta</th>
            <th>Ganancia Ruta</th>
            
    </thead>
    <tbody>
<?php 
    if(isset($_GET["Button"])){
    $busqueda= $_GET["Busqueda"];
    $consulta = $conection->query("SELECT * FROM Rutas WHERE Tipo_de_Vehiculo LIKE '%$busqueda%'");
}
?>

<?php 
    while($row= mysqli_fetch_array($consulta)){
        ?>   
        <tr>
        <td> <?php echo $row["ID_Ruta"]; ?> </td>
        <td> <?php echo $row["Tiempo_Recorrido"]; ?></td>
        <td> <?php echo $row["Tipo_de_Vehiculo"]; ?> </td>
        <td> <?php echo $row["Tipo_de_Terreno"]; ?></td>
        <td> <?php echo $row["Nombre_Ruta"]; ?></td>
        <td> <?php echo $row["Ganancia_Ruta"]; ?></td>
        </tr>
<?php
        }
?>

<?php 
    while($row= $consulta1->fetch_array($consulta))  {      
    echo $row['ID_Ruta'] . $row['Tiempo_Recorrido'] . $row['Tipo_de_Vehiculo'] . $row['Tipo_de_Terreno'] . $row['Nombre_Ruta'] . $row['Ganancia_Ruta'];
        }
?>

        
</tbody>
        </table>

        <table>

        </table>
</form>
</html>
