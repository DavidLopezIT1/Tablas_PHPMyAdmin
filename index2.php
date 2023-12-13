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
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <title>Init_Program.php2</title>
</head>

<body>

    <header>
       <h1>  Base de Datos de Transporte Terrestre Operación General</h1>
    </header>

    <main> 

    <h2>Base de datos de Conductores</h2>

<form action="" method= "get">

    <input type="text" name="Busqueda2">
    <input type="Submit" Value="Send Master" name="Button">

    <select name="Selection2" id="Selection" name ="Selection">
         <option value="Defoult"></option>
         <option value="Tabla_de_Rutas">Rutas</option>
         <option value="Tabla_de_Carros">Automóviles</option>
    </select>

    <button>Slct</button>
    <?php

if($_GET["Selection2"] == "Tabla_de_Rutas"){
    ?>
    <a href="./Prueba_index.php"> <i class="fa-solid fa-object-ungroup fa-beat"></i> </a>
    <?php 
} 

else if($_GET["Selection2"] == "Tabla_de_Carros"){
    ?>
    <a href="./index3.php"> <i class="fa-solid fa-object-ungroup fa-beat"></i> </a>
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
            <th>Num Cedula</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Tipo de Vehiculo</th>
    </thead>

    <?php 
    if(isset($_GET["Button"])){
            $busqueda2 = $_GET["Busqueda2"];
            $Consulta2 = $conection->query("SELECT * FROM Conductores WHERE Num_Cedula LIKE '%$busqueda2%'")
            ?>

            <?php
        }
        ?>
<?php 
    while($row= mysqli_fetch_array($Consulta2)){
        ?>

    <tbody>
        
        
        <tr>
        <td><?php echo $row["Num_Cedula"]; ?></td>
        <td><?php echo $row["Nombre"]; ?></td>
        <td><?php echo $row["Edad"]; ?></td>
        <td><?php echo $row["Apellido"]; ?></td>
        <td><?php echo $row["Telefono"]; ?></td>
        <td><?php echo $row["Correo"]; ?></td>
        <td><?php echo $row["Tipo_de_Vehiculo"]; ?></td>
        </tr>
        
        <?php 
    }
    ?>
        <?php 

        while($row= $consulta->fetch_array($Consulta2))  {      
        echo $row['Num_Cedula'] . $row['Nombre'] . $row['Edad'] . $row['Apellido'] . $row['Telefono'] . $row["Correo"] . $row["Tipo_de_Vehiculo"];
        }
    ?>
    </tbody>
          </table>
                 </form>
    </main> 
    å
    <footer></footer>

</body>
</html>
