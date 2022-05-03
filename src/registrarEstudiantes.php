<?php 

include("../src/conexionSql.php");

if (isset($_POST['enviar'])){
$cod = $_POST['cod'];
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$carrera = $_POST['carrera'];

$query = "INSERT INTO estudiantes(cod,nombre,apellidoP,apellidoM,codCarrera) 
                        VALUES('$cod','$nombre','$apellidoP','$apellidoM','$carrera')";

#echo "$nombre  ,  $apellido";

$result=mysqli_query($conn,$query);

if(!$result){
    die("Fallo el envió a la db");
}

$_SESSION['mensaje'] = "Se guarda exitosamente a la DB";
$_SESSION['mensaje_tipo'] = "success";

header("Location: ../index.php");

}

?> 