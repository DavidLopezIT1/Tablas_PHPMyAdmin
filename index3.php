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
    <title>Init_PRogram.php</title>
</head>

<body>

    <header>
       <h1>  Base de Datos de Transporte Terrestre Operación General</h1>
    </header>

    <main> 

<form action="" method= "get">
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
    while($row= mysqli_fetch_array($result3)){
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