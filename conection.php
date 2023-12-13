<?php
$conection = mysqli_connect("localhost", "root", "Juana101453**", "full_stack");

if($conection->connect_errno){
    Die("Conexión Fallida, por favor intente de nuevo" . $conection->connect_errno);
}
else{
    echo "";
}
?>