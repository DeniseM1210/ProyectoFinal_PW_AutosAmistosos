<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dae357c832.js" crossorigin="anonymous"></script>
    <title>Clientes</title>
</head>
<body>
    <?php
        require_once('header.php');
    ?>

    <div class="container">
            <div class="row row-cols-2">
                <div class="col text-center">
                    <h3> Clientes </h3>
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
                                <label for="id_cli">ID:</label>  
                                <input type="text" class="form-control" id="id_cli" placeholder="ID Cliente" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="nombre">Nombre:</label> 
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="ap_pat">Apellido Paterno:</label> 
                                <input type="text" class="form-control" id="ap_pat" placeholder="Apellido Paterno" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="ap_mat">Apellido Materno:</label> 
                                <input type="text" class="form-control" id="ap_mat" placeholder="Apellido Materno" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="tel">Telefono:</label> 
                                <input type="text" class="form-control" id="tel" placeholder="Telefono" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">  
                                <label for="correo">Correo electrónico:</label> 
                                <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico" required>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col">
                    <input class="btn btn-primary pt-4 pb-4 mt-2 mb-2" type="button" value="-" id="btn_op">
                    
                </div>
            </div>
        </div>
</body>
</html>