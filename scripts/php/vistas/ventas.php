<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dae357c832.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/main.css">
    <title>Ventas</title>
</head>
<body>
    <?php
        require_once('header.php')
    ?>

    <div class="container">
            <div class="row row-cols-2">
                <div class="col text-center">
                    <h3> Ventas </h3>
                    <select id="opcion">
                        <option selected>Seleccione una opción...</option>
                        <option value="altas">Altas </option>
                        <option value="bajas">Bajas </option>
                        <option value="cambios">Cambios </option>
                        <option value="consultas">Consultas </option>
                    </select>
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-6 col-md-8 offset-md-2">
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group"> 
                                <label for="id_auto">ID Auto:</label>  
                                <input type="text" class="form-control" id="id_auto" placeholder="ID Auto" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="id_cliente">ID Cliente:</label> 
                                <input type="text" class="form-control" id="id_cliente" placeholder="Id Cliente" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="info_e">Información Extra:</label>   
                                <textarea class="form-control" id="info_e" rows="3"> </textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="precio">Precio:</label> 
                                <input type="text" class="form-control" id="precio" placeholder="Precio" required>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col">
                    <input class="btn btn-primary pt-4 pb-4 mt-2 mb-2" type="button" value="Agregar" id="btn_add">
                    <input class="btn btn-primary pt-4 pb-4 mt-2 mb-2" type="button" value="Eliminar" id="btn_eli">
                    <input class="btn btn-primary pt-4 pb-4 mt-2 mb-2" type="button" value="Cambiar" id="btn_cam">
                    <input class="btn btn-primary pt-4 pb-4 mt-2 mb-2" type="button" value="Consultar" id="btn_cons">
                </div>
            </div>
            
        </div>
</body>
</html>