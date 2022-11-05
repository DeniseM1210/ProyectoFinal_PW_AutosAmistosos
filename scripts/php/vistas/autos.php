<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dae357c832.js" crossorigin="anonymous"></script>
    
    <title>Ventas</title>
</head>
<body>
    <?php
        require_once('header.php')
    ?>

    <div class="container">
        <div class="row row-cols-2">
            <div class="col text-center">
                <h3> Autos </h3>
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
                            <label for="id_auto">ID:</label>  
                            <input type="text" class="form-control" id="id_auto" placeholder="ID Auto" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">  
                            <label for="precio">Precio:</label> 
                            <input type="text" class="form-control" id="precio" placeholder="Precio" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="modelo">Modelo:</label>   
                            <input type="text" class="form-control" id="modelo" placeholder="Modelo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">  
                            <label for="año">Año:</label> 
                            <select class="form-select" id="año">
                                <option selected>Seleccione el año... </option>
                                <option value="2000">2000 </option>
                                <option value="2001">2001 </option>
                                <option value="2002">2002 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"> 
                            <label for="lug_fab">Lugar de Fabricación:</label>  
                            <input type="text" class="form-control" id="lug_fab" placeholder="Lugar de fabricación" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"> 
                            <label for="cilindros">Número de cilindros:</label>  
                            <select class="form-select" id="cilindros">
                                <option selected>Seleccione el número de cilindros... </option>
                                <option value="2000">2000 </option>
                                <option value="2001">2001 </option>
                                <option value="2002">2002 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">   
                            <label for="puertas">Número de puertas:</label>
                            <select class="form-select" id="puertas">
                                <option selected>Seleccione el número de puertas... </option>
                                <option value="2000">2000 </option>
                                <option value="2001">2001 </option>
                                <option value="2002">2002 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">  
                            <label for="peso">Peso:</label> 
                            <select class="form-select" id="peso">
                                <option selected>Seleccione el peso... </option>
                                <option value="2000">2000 </option>
                                <option value="2001">2001 </option>
                                <option value="2002">2002 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"> 
                            <label for="capacidad">Capacidad:</label>  
                            <select class="form-select" id="capacidad">
                                <option selected>Seleccione la capacidad... </option>
                                <option value="2000">2000 </option>
                                <option value="2001">2001 </option>
                                <option value="2002">2002 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"> 
                            <label for="color">Color:</label>  
                            <select class="form-select" id="color">
                                <option selected>Seleccione el color... </option>
                                <option value="blanco">Blanco </option>
                                <option value="negro">Negro </option>
                                <option value="gris">Gris </option>
                            </select>
                        </div>
                    </div>
                </form>
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