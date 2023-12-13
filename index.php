<?php
include "./conection.php";


$result = $conection->query("SELECT * FROM Rutas ");
$result2 = $conection->query("SELECT * FROM Conductores ");
$result3 = $conection->query("SELECT * FROM Carros ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Init_Program.php1</title>
</head>

<body>

    <header>
       <h1>  Base de Datos de Transporte Terrestre Operación General</h1>
    </header>

    <main>

    <form action="" method= "get">
    <table>
    <thead>
            <th>ID Ruta</th>
            <th>Tiempo Recorrido</th>
            <th>Tipo de Vehiculo</th>
            <th>Tipo de Terreno</th>
            <th>Nombre Ruta</th>
            <th>Ganancia Ruta</th>
    </thead>
<?php 
    while($row= mysqli_fetch_array($result)){
        ?>

    <tbody>
        <tr>
        <td><?php echo $row["ID_Ruta"]; ?></td>
        <td><?php echo $row["Tiempo_Recorrido"]; ?></td>
        <td><?php echo $row["Tipo_de_Vehiculo"]; ?></td>
        <td><?php echo $row["Tipo_de_Terreno"]; ?></td>
        <td><?php echo $row["Nombre_Ruta"]; ?></td>
        <td><?php echo $row["Ganancia_Ruta"]; ?></td>
        
        </tr>
        
        <?php 
    }
    ?>
            <?php 

    while($row= $consulta->fetch_array($result))  {      
    echo $row[''] . $row[''] . $row[''] . $row[''] . $row[''] . $row[""];
}
?>
</tbody>
        </table>
</form>

