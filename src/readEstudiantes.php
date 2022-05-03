
<?php 
    include("../src/conexionSql.php");

    $query = "SELECT * FROM estudiantes";
    $result_tasks = mysqli_query($conn, $query);    
    while($row = mysqli_fetch_assoc($result_tasks)) { ?>

    <option value="<?php echo $row['cod']?>"> <?php echo $row['cod'], $row['nombre'], $row['apellidoP'], $row['apellidoM'];  ?> </option>


<?php } ?>