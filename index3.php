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
    <title>Init_Program.php3</title>
</head>

<body>

    <header>
       <h1>  Base de Datos de Transporte Terrestre Operación General</h1>
    </header>

    <main> 
    <h2>Base de datos de Vehículos</h2>
<form action="" method= "get">

<input type="text" name="Busqueda3">
    <input type="Submit" Value="Send Master" name="Button3">

    <select name="Selection" id="Selection" name ="Selection">
         <option value="Defoult"></option>
         <option value="Tabla_de_Rutas">Rutas</option>
         <option value="Tabla_de_usuarios">Conductores</option>
    </select>
    <button>Slct</button>
    
   <?php
    if($_GET["Selection"] == "Tabla_de_Rutas"){
    ?>
        <a href="./Prueba_index.php"> <i class="fa-solid fa-object-ungroup fa-beat"></i>  </a>
    <?php

    } else if($_GET["Selection"] == "Tabla_de_usuarios"){
        ?>

        <a href="./index2.php"> <i class="fa-solid fa-object-ungroup fa-beat"></i>  </a>
    <?php
    }
    ?>
   

    <table>
    <thead>
            <th>Placa Vehículo</th>
            <th>Tipo de Vehículo</th>
            <th>Licencia de tránsito</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Capacidad del Vehículo</th>
            
    </thead>



    <?php
    if(isset($_GET["Button3"])){
        $busqueda3 = $_GET["Busqueda3"];
        $consulta3 = $conection->query("SELECT * FROM Carros WHERE Placa_Vehiculo LIKE '%$busqueda3%'");
    }
    ?>
<?php 
    while($row= mysqli_fetch_array($consulta3)){
        ?>

    <tbody>
        <tr>
        <td><?php echo $row["Placa_Vehiculo"]; ?></td>
        <td><?php echo $row["Tipo_de_Vehiculo"]; ?></td>
        <td><?php echo $row["Licencia_De_Transito"]; ?></td>
        <td><?php echo $row["Marca"]; ?></td>
        <td><?php echo $row["Model"]; ?></td>
        <td><?php echo $row["Capacidad_Vehiculo"]; ?></td>
        </tr>

        <?php 
    }
    ?>
            <?php 

    while($row= $consulta->fetch_array($result3))  {      
    echo $row[''] . $row[''] . $row[''] . $row[''] . $row[''] . $row[""] . $row[""];
}
?>
</tbody>
        </table>
</form>
    </main>
    <footer></footer>

</body>
</html>
