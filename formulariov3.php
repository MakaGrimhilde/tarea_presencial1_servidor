<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title>Ejercicio 3</title> 
    </head>
    <body>
    <br/>
        <div class="row justify-content-center">
            <h2>Formulario</h2>
        </div>
        <br/>
        <div class="row justify-content-center">
            <!--Comienzo de la estructura del formulario-->    
            <form class="form-horizontal" method="POST" action="#">
                <div class="row">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger el nombre-->
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">

                        <?php

                            if (isset($_POST["boton"])){ //si se reciben datos desde $_POST al pulsar el botón

                                /**
                                 * si el campo nombre no está vacío, el valor introducido no es superior a 15 caracteres, no hay 
                                 * patrones numéricos y el valor introducido no es de tipo entero, mostrará por pantalla el nombre 
                                 * introducido por el usuario
                                 */
                                if (!empty($_POST["nombre"]) && strlen($_POST["nombre"]) <= 15 && !preg_match("/[0-9]/", $_POST["nombre"])
                                && !is_numeric($_POST["nombre"])){

                                    $nombre = trim($_POST["nombre"]);
                                    $nombre = stripslashes($_POST["nombre"]);
                                    $nombre = htmlspecialchars($_POST["nombre"]);
                                    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
                                     echo "<strong>Nombre:</strong> ".$_POST["nombre"]."<br/>";

                                } else { //de lo contrario, se mostrará el siguiente mensaje de error

                                    echo "<div class=\"alert alert-danger\">El nombre solo puede estar formado por letras y tener una longitud
                                    máxima de 15 caracteres</div><br/>";
                                }

                            }

                        ?>

                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger los apellidos-->
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos">

                        <?php

                            if (isset($_POST["boton"])){ //si se reciben datos desde $_POST al pulsar el botón

                                /**
                                 * si el campo apellidos no está vacío, no se encuentra un patrón numérico en los valores introducidos y
                                 * estos no son de tipo entero, se mostrarán los apellidos introducidos por el usuario
                                 */
                                if (!empty($_POST["apellidos"]) && !preg_match("/[0-9]/", $_POST["apellidos"]) && 
                                !is_numeric($_POST["apellidos"]) && strlen($_POST["apellidos"] <= 20)){

                                    $apellidos = trim($_POST["apellidos"]);
                                    $apellidos = stripslashes($_POST["apellidos"]);
                                    $apellidos = htmlspecialchars($_POST["apellidos"]);
                                    $apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING);
                                    echo "<strong>Apellidos:</strong> ".$_POST["apellidos"]."<br/>";

                                } else { //de lo contrario, se mostrará el siguiente mensaje de error

                                    echo "<div class=\"alert alert-danger\">El apellido solo puede estar formado por letras</div><br/>";
                                }

                            }

                        ?>

                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la dirección email-->
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Ej: elmotivao@gmail.com" id="email" name="email">

                            <?php

                                if (isset($_POST["boton"])){ //si se reciben datos desde $_POST al pulsar el botón

                                    /**
                                     * si el campo email no está vacío y cumple con el filtro de email válido, se mostrará el email 
                                     * introducido por el usuario
                                     */
                                    if (!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

                                        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                                        echo "<strong>Email:</strong> ".$_POST["email"]."<br/>";

                                    } else { //de lo contrario, se mostrará el siguiente mensaje de error

                                        echo "<div class=\"alert alert-danger\">El email tiene que ser válido y es un campo obligatorio</div><br/>";
                                    }

                                }

                            ?>

                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="passwd">Contraseña</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">

                        <?php

                            if (isset($_POST["boton"])){ //si se reciben datos desde $_POST al pulsar el botón

                                /**
                                 * si el campo contraseña no está vacío y su longitud es mayor o igual a 6 caracteres, se mostrará 
                                 * la contraseña introducida por el usuario
                                 */
                                if (!empty($_POST["passwd"]) && strlen($_POST["passwd"]) >= 6){

                                    echo "<strong>Contraseña:</strong> ".sha1($_POST["passwd"])."<br/>";

                                } else { //de lo contrario, se mostrará el siguiente mensaje de error

                                    echo "<div class=\"alert alert-danger\">Debe tener una longitud mayor que 6 caracteres</div><br/>";
                                }

                            }

                        ?>  

                    </div>
                </div>
                <br/>
                <div class="row justify-content-center">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger el NIF-->
                        <label for="nif">NIF</label>
                        <input type="text" class="form-control" id="nif" name="nif">

                        <?php

                            if (isset($_POST["boton"])){ //si se reciben datos desde $_POST al pulsar el botón

                                /**
                                 * si el campo nif no está vacío y se compone de 8 dígitos y una letra, se mostrará el nif introducido
                                 */
                                if (!empty($_POST["nif"]) && preg_match("/[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]/", $_POST["nif"])){

                                    echo "<strong>NIF:</strong> ".$_POST["nif"]."<br/>";

                                } else { //de lo contrario, se mostrará el siguiente mensaje de error

                                    echo "<div class=\"alert alert-danger\">Este campo no puede estar vacío y el NIF se conforma de 8 
                                    dígitos y una letra</div><br/>";
                                }

                            }

                        ?>

                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="fecha">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" id="fecha" name="fecha">

                        <?php

                            if (isset($_POST["boton"])){ //si se reciben datos desde $_POST al pulsar el botón

                                //si el campo fecha no está vacío y se introduce un formato de fecha válido, se mostrará por pantalla
                                if (!empty($_POST["fecha"]) && preg_match("/(0[1-9]|[12]?[0-9]|3[01])\/(0[1-9]|1[0-2])\/(\d){4}/", 
                                $_POST["fecha"])){

                                    echo "<strong>Fecha de nacimiento:</strong> ".$_POST["fecha"]."<br/>";

                                } else { //de lo contrario, se mostrará el siguiente mensaje de error

                                    echo "<div class=\"alert alert-danger\">Este campo no puede estar vacío y la fecha debe tener
                                    un formato válido</div><br/>";
                                }

                            }

                        ?>

                    </div>
                </div>
                <br/>
                <!--botones para enviar los datos recogidos en el formulario y para limpiar los campos-->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                </div>
            </form><!--Fin del formulario-->
            <br/>
        </div>   
    </body>
</html>