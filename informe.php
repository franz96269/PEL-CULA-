<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilos.css">

</head>

<body>
    <main>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <!--esto es la barra de navegacion-->






        <!--Todo lo que tiene que ver con la coneccion de la base de datos para poder mostrar los datos de la tabla y la tabla-->


        <div class="position-absolute top-50 start-50 translate-middle">

            <div class="d-flex bd-highlight">
                <div class="glass">
                    <div class="p-2 flex-grow-1 bd-highlight">





                        <nav class="navbar navbar-light" style="background-color: rgb(255, 255, 255);">

                            <a class="navbar-brand" href="informe.php" style="color: rgb(68, 68, 68); width: auto;">

                                <div style="margin-left: 10%;">

                                    <img src="./images/circle-cropped.png" with="50" height="50"> Franz
                                    </img>

                                </div>

                            </a>

                            <ul class="nav">

                                <div class="bd-example">
                                    <!--Aqui estan los botones que activan el menu desplegable-->

                                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#Sapo" aria-controls="offcanvasScrolling"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg> </button>

                                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#Luis" aria-controls="offcanvasRight"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg></button>

                                </div>
                            </ul>
                        </nav>
                        <!--La base de la tabla-->
                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Pelicula</th>
                                    <th scope="col">Año</th>
                                    <th scope="col">Director</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Protagonista</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--Conexion con la base de datos-->
                                <?php
                    $con = mysqli_connect ('localhost','root','','peliculas') or die ('Error en la conexion del servidor');
                    $query = "select * from pelicula;";
                    $res = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($res)) {

                ?>

                                    <tr>
                                        <td>
                                            <?php echo $row ['id'];  ?>
                                        </td>
                                        <td>
                                            <?php echo $row ['Pelicula']; ?> </td>
                                        <td>
                                            <?php echo $row ['Anio']; ?> </td>
                                        <td>
                                            <?php echo $row ['Director']; ?> </td>
                                        <td>
                                            <?php echo $row ['Genero']; ?> </td>
                                        <td>
                                            <?php echo $row ['Protagonistas']; ?> </td>
                                    </tr>

                                    <?php
        }
        ?>
</body>
</table>
</div>
</div>
</div>
</div>
</div>
<!--Menu desplegable de insertar-->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="Sapo" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Insertar</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!--Formulario de insertar-->
    <div class="offcanvas-body">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        </head>
        <!--El formulario se conecta a el archivo pelalta.php para poder ingresar los datos en la base de datos despues de dar click en enviar-->

        <body>

            <form action="pelalta.php" method="Post">


                Pelicula:<input type="text" name="Pelicula" class="form-control" aria-describedby="passwordHelpBlock">
                <div class=" form-text"> ingrese el nombre de la pelicula</div>

                Director: <input type="text" name="Director" class="form-control" aria-describedby="passwordHelpBlock">
                <div class=" form-text"> ingrese el nombre del Director</div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Selecciona el año</label>
                    <select name="Anio" class="form-select"><br>

            <option value = "2006">2006</option>
            <option value = "2002">2002</option>
            <option value = "1992">1992</option>
    
        </select><br> Protagonista: <input type="text" name="Protagonistas" class="form-control" aria-describedby="passwordHelpBlock">
                    <div class=" form-text"> ingrese el nombre del Protagonista</div>

                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Selecciona el genero</label>
                        <select name="Genero" class="form-select"><br>
    
                <option value = "Aventuras">Aventuras</option>
                <option value = "Ciencia Ficcion">Ciencia Ficcion</option>
                <option value = "Drama">Drama</option>
                <option value = "Fantasia">Fantasia</option>
            </select><br>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
                            <label class="form-check-label" for="flexSwitchCheckDefault">¿Estas seguro?</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>
                    </div>

                    <button type="submit" name="enviar" value="Enviar" class="btn btn-primary">Enviar</button>


            </form>
            </div>
        </body>

        </html>

    </div>
</div>

<!--Menu desplegable de eliminar-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="Luis" data-bs-backdrop="false" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Eliminar</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <!--Formulario de eliminar-->
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="uft=8">
            <meta name="viewport" content="with=device-with, user-scalable=no, inicial-scale=1,maximum-scale=1,minimun-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        </head>

        <body>


            <!--El formulario de insertar  se conecta al archivo pelalta para poder elinar los datos de la base de datos-->

            <form action="pelerase.php" method="POST" enctype="multipart/form-data" onSubmit="return validation() " id="general">


                Ingrese el numero de id a eliminiar:
                <br>
                <input type="text" class="form-control" name="id" class="form-control">

                <br>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
                    <label class="form-check-label" for="flexSwitchCheckDefault">¿Estas seguro?</label>
                    <div class="invalid-feedback">Example invalid feedback text</div>

                </div>
                <br>
                <div>

                    <input type="submit" class="btn btn-primary" name="name" value="Borrar registro">
                </div>





            </form>
        </body>

        </html>
    </div>

</div>
</div>

</main>
</body>

</html>