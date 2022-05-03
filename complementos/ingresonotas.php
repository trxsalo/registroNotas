<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrad 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    >
    

    <title>REGISTRO</title>
</head>
<body>

<nav class="navbar  navbar-dark bg-dark">
    <div class="container">
        <a href="../index.php" class="navbar-brand">
            Inicio
        </a>
        <a href="../complementos/ingresoEstudiantes.php" class="navbar-brand">
            Registrar Estudiantes
        </a>
        <a href="../complementos/ingresonotas.php" class="navbar-brand">
            Registrar notas de Estudiantes
        </a>
    </div>
</nav>




<div class="container p-4 container-lg">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php if(isset($_SESSION['mensaje'])) {?>
            <div class="alert alert-<?=$_SESSION['mensaje_tipo'];?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["mensaje"] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); }?>



            <div class=" card card-body">

                <form action="../src/ingresoNotas.php">

                    <div class="form-grup">
                        <select class="form-select" aria-label="Default select example" name="codEstudiantes">
                            <option selected>Selecione el alumno</option>

                            <?php include("../src/readEstudiantes.php") ?>

                        </select>
                    </div>

                    <div class="form-grup">
                        <input type="number" name="nota" class="form-control"
                        placeholder="Notas" autofocus
                        >
                    </div>

                    <div class="form-grup">
                        <select class="form-select" aria-label="Default select example" name="semestre">
                            <option selected>Selecione el semestre</option>
                            <option value="1">1 semestre</option>
                            <option value="2">2 semestre</option>
                            <option value="3">3 semestre</option>
                            <option value="4">4 semestre</option>
                            <option value="5">5 semestre</option>
                            <option value="6">6 semestre</option>
                            <option value="7">7 semestre</option>
                            <option value="8">8 semestre</option>
                            <option value="9">9 semestre</option>
                            <option value="10">10 semestre</option>
                        </select>
                    </div>
                    <div class="form-grup">
                        <select class="form-select" aria-label="Default select example" name="parcial">
                            <option selected>Selecione el parcial</option>
                            <option value="1">1_parcial</option>
                            <option value="2">2_parcial</option>
                            <option value="3">3_parcial</option>

                        </select>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
        crossorigin="anonymous">
    </script>

    </body>
</html>