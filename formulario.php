<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <title>Ejercicio 2</title> 
    </head>
    <body>
    <br/>
        <div class="row justify-content-center" id="cabecera">
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
                        <input type="text" class="form-control" id="passwd" name="passwd">
                    </div>
                </div>
                <br/>
                <div class="row justify-content-center">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger el NIF-->
                        <label for="email">NIF</label>
                        <input type="text" class="form-control" id="nif" name="nif">
                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="passwd">Fecha de Nacimiento</label>
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