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
                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger los apellidos-->
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la dirección email-->
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Ej: elmotivao@gmail.com" id="email" name="email">
                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="passwd">Contraseña</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">
                    </div>
                </div>
                <br/>
                <div class="row justify-content-center">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger el NIF-->
                        <label for="nif">NIF</label>
                        <input type="text" class="form-control" id="nif" name="nif">
                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="fecha">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" id="fecha" name="fecha">
                    </div>
                </div>
                <br/>
                <!--botones para enviar los datos recogidos en el formulario y para limpiar los campos-->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                </div>
            </form><!--Fin del formulario-->
        </div>   
    </body>
</html>

<?php

    if (isset($_POST["boton"])){
        
        //si se reciben datos desde $_POST al pulsar el botón

        echo "<h4>Datos del usuario</h4>";

        if (!empty($_POST["nombre"])){ //si el campo del nombre no está vacío mostrará por pantalla el nombre introducido en el formulario

            echo "<b>Nombre:</b> ".$_POST["nombre"]."<br/>";

        } else { //si está vacío se muestra el siguiente mensaje

            echo "No definido :(<br/>";
        }

        if (!empty($_POST["apellidos"])){ //si el campo apellidos no está vacío mostrará el apellido introducido en el formulario

            echo "<b>Apellidos:</b> ".$_POST["apellidos"]."<br/>";

        } else { //si está vacío se muestra el siguiente mensaje

            echo "No definido :(<br/>";
        }

        if (!empty($_POST["email"])){ //si el campo email no está vacío mostrará por pantalla el email introducido en el formulario

            echo "<b>Email:</b> ".$_POST["email"]."<br/>";

        } else { //si está vacío se muestra el siguiente mensaje

            echo "No definido :(<br/>";
        }

        if (!empty($_POST["passwd"])){ //si el campo de la contraseña no está vacío mostrará la contraseña cifrada

            echo "<b>Contraseña:</b> ".sha1($_POST["passwd"])."<br/>";

        } else { //si está vacío se muestra el siguiente mensaje

            echo "No definido :(<br/>";
        }

        if (!empty($_POST["nif"])){ //si el campo nif no está vacío mostrará lo introducido en él

            echo "<b>NIF:</b> ".$_POST["nif"]."<br/>";

        } else { //si está vacío se muestra el siguiente mensaje

            echo "No definido :(<br/>";
        }

        if (!empty($_POST["fecha"])){ //si el campo fecha ha recibido un valor se mostrará por pantalla

            echo "<b>Fecha de nacimiento:</b> ".$_POST["fecha"]."<br/>";

        } else { //si no se ha recibido nada se muestra el siguiente mensaje

            echo "No definido :(<br/>";
        }

    }

?>