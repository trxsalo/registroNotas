
<?php 
    include("../src/conexionSql.php");

    $query = "SELECT * FROM carreras";
    $result_tasks = mysqli_query($conn, $query);   

    while($row = mysqli_fetch_assoc($result_tasks)) { ?>

    <option value="<?php echo $row['cod']?>"> <?php echo $row['nombreCarrera'] ?> </option>


<?php } ?>