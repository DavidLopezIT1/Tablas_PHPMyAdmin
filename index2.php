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
    <title>Init_Program.php2</title>
</head>

<body>

    <header>
       <h1>  Base de Datos de Transporte Terrestre Operación General</h1>
    </header>

    <main> 

    <h2>Base de datos de Conductores</h2>

<form action="" method= "get">
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
    while($row= mysqli_fetch_array($result2)){
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

    while($row= $consulta->fetch_array($result2))  {      
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
