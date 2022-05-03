<?php 

include("../src/conexionSql.php");

if (isset($_POST['enviar'])){
$codEStudiantes = $_POST['codEstudiantes'];
$nota = $_POST['nota'];
$semestre = $_POST['semestre'];
$parcial = $_POST['parcial'];


$query = "INSERT INTO notas(nota,semestre,parcial,codEStudiantes) 
                        VALUES('$nota','$semestre','$parcial','$codEStudiantes')";

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