<?php
require_once '../models/Mascota.php';
if (isset($_GET['op'])){

    $mascota = new Mascota();

    if ($_GET['op'] == 'listarMascotas') {
        $datosObtenidos = $mascota->listarMascotas();

        //La salida fue comprobada en postman
        // echo json_encode($datosObtenidos);

        // Enviar resultados a la vista
        if(count($datosObtenidos) == 0){
            echo "<h5>No encontramos registros disponibles</h5>";
        }
        else{
            // Variable, utilizado para comprobar si contiene imagen o no
            $imagen = "";

            // Mostrar un registro, por cada iteración
            foreach($datosObtenidos as $fila){
    
                echo "
                    <div class='col-md-3' style='border-radius:60px;'>
                        <div class='card'>
                            <img src='./img/gato.jpg' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='h5'> $fila->nombremascota </p>
                                <p class='card-text' style='text-align:justify'><b>Tipo de animal:</b> $fila->animal</p>
                                <p class='card-text' style='text-align:justify'><b>Raza:</b> $fila->raza</p>
                                <p class='card-text' style='text-align:justify'><b>Género:</b> $fila->genero</p>
                                <p class='card-text' style='text-align:justify'><b>Esterilizado:</b> $fila->esterilizacion</p>
                                <p class='card-text' style='text-align:justify'><b>Fecha de Nacimiento:</b> $fila->fechanacimiento</p>
                            </div>
                            <div class='card-footer card-outline card-secondary bg-light' >
                            </div>
                        </div>
                    </div>
                
                    ";
                        
            }
        }
            
        
    }

    if ($_GET['op'] == 'listarMascotasTabla') {
        $datosObtenidos = $mascota->listarMascotas();

        if(count($datosObtenidos) == 0){
            echo "
            <tr>
                <td class='text-center' colspan='7'>No se encuentran datos</td>             
            </tr>";
        }else{
            $i = 1;
            foreach($datosObtenidos as $tabla){
                echo "
                    <tr>
                        <td class='text-center'> $i </td>
                        <td class='text-center'> $tabla->nombremascota</td>
                        <td class='text-center'> $tabla->animal</td>
                        <td class='text-center'> $tabla->genero</td>
                        <td class='text-center'> $tabla->fechanacimiento</td>
                        <td class='text-center'> $tabla->esterilizacion</td>
                        <td class='text-center'>
                            <a href='#' data-idmascota='$tabla->idmascota' class='btn btn-sm btn-outline-info modificar'>
                            <i class='fas fa-clinic-medical'></i>
                            <a href='#' data-idmascota='$tabla->idmascota' class='btn btn-sm btn-outline-secondary eliminar'>
                                <i class='fas fa-trash-alt'></i>
                            </a>
                        </td>
                    </tr>
                ";
                $i++;
            }
        }
    }

    if ($_GET['op'] == 'listarMascotasAdoptadas') {
        $datosObtenidos = $mascota->listarMascotasAdoptadas();

        if(count($datosObtenidos) == 0){
            echo "<h5>No encontramos registros disponibles :( </h5>";
        }
        else{
            // Variable, utilizado para comprobar si contiene imagen o no
            $imagen = "";

            // Mostrar un registro, por cada iteración
            foreach($datosObtenidos as $fila){

                echo "
                <div class='col-md-3' style='border-radius:60px;'>
                    <div class='card'>
                        <img src='./img/gato.jpg' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <p class='h5'> $fila->nombremascota </p>
                            <p class='card-text' style='text-align:justify'><b>Tipo de animal:</b> $fila->animal</p>
                            <p class='card-text' style='text-align:justify'><b>Raza:</b> $fila->raza</p>
                            <p class='card-text' style='text-align:justify'><b>Género:</b> $fila->genero</p>
                            <p class='card-text' style='text-align:justify'><b>Esterilizado:</b> $fila->esterilizacion</p>
                            <p class='card-text' style='text-align:justify'><b>Fecha de Nacimiento:</b> $fila->fechanacimiento</p>
                        </div>
                        <div class='card-footer card-outline card-secondary bg-light' >
                        </div>
                    </div>
                </div>
                
                    ";
                        
            }
        }
            
        
    }

    if ($_GET['op'] == 'MascotaTipo') {

        $datosObtenidos = $mascota->MascotaTipo(["idanimal" => $_GET['idanimal']]);

        if(count($datosObtenidos) == 0){
            echo "<h5>No encontramos registros disponibles :( </h5>";
        }
        else{
            // Variable, utilizado para comprobar si contiene imagen o no
            $imagen = "";

            // Mostrar un registro, por cada iteración
            foreach($datosObtenidos as $fila){

                echo "
                    <div class='col-md-3' style='border-radius:60px;'>
                        <div class='card'>
                            <img src='./img/gato.jpg' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='h5'> $fila->nombremascota </p>
                                <p class='card-text' style='text-align:justify'><b>Tipo de animal:</b> $fila->idanimal</p>
                                <p class='card-text' style='text-align:justify'><b>Raza:</b> $fila->raza</p>
                                <p class='card-text' style='text-align:justify'><b>Género:</b> $fila->genero</p>
                                <p class='card-text' style='text-align:justify'><b>Esterilizado:</b> $fila->esterilizacion</p>
                                <p class='card-text' style='text-align:justify'><b>Fecha de Nacimiento:</b> $fila->fechanacimiento</p>
                            </div>
                            <div class='card-footer card-outline card-secondary bg-light' >
                            </div>
                        </div>
                    </div>
                
                    ";
                        
            }
        }

    }

    if ($_GET['op'] == 'MascotaGenero') {

        $datosObtenidos = $mascota->MascotaGenero(["genero" => $_GET['genero']]);

        if(count($datosObtenidos) == 0){
            echo "<h5>No encontramos registros disponibles :( </h5>";
        }
        else{
            // Variable, utilizado para comprobar si contiene imagen o no
            $imagen = "";

            // Mostrar un registro, por cada iteración
            foreach($datosObtenidos as $fila){

                echo "
                    <div class='col-md-3' style='border-radius:60px;'>
                        <div class='card'>
                            <img src='./img/gato.jpg' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='h5'> $fila->nombremascota </p>
                                <p class='card-text' style='text-align:justify'><b>Tipo de animal:</b> $fila->idanimal</p>
                                <p class='card-text' style='text-align:justify'><b>Raza:</b> $fila->raza</p>
                                <p class='card-text' style='text-align:justify'><b>Género:</b> $fila->genero</p>
                                <p class='card-text' style='text-align:justify'><b>Esterilizado:</b> $fila->esterilizacion</p>
                                <p class='card-text' style='text-align:justify'><b>Fecha de Nacimiento:</b> $fila->fechanacimiento</p>
                            </div>
                            <div class='card-footer card-outline card-secondary bg-light' >
                            </div>
                        </div>
                    </div>
                
                    ";
                        
            }
        }

    }

    if ($_GET['op'] == 'MascotaEsterilizacion') {

        $datosObtenidos = $mascota->MascotaEsterilizado(["esterilizacion" => $_GET['esterilizacion']]);

        if(count($datosObtenidos) == 0){
            echo "<h5>No encontramos registros disponibles :( </h5>";
        }
        else{
            // Variable, utilizado para comprobar si contiene imagen o no
            $imagen = "";

            // Mostrar un registro, por cada iteración
            foreach($datosObtenidos as $fila){

                echo "
                    <div class='col-md-3' style='border-radius:60px;'>
                        <div class='card'>
                            <img src='./img/gato.jpg' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='h5'> $fila->nombremascota </p>
                                <p class='card-text' style='text-align:justify'><b>Tipo de animal:</b> $fila->idanimal</p>
                                <p class='card-text' style='text-align:justify'><b>Raza:</b> $fila->raza</p>
                                <p class='card-text' style='text-align:justify'><b>Género:</b> $fila->genero</p>
                                <p class='card-text' style='text-align:justify'><b>Esterilizado:</b> $fila->esterilizacion</p>
                                <p class='card-text' style='text-align:justify'><b>Fecha de Nacimiento:</b> $fila->fechanacimiento</p>
                            </div>
                            <div class='card-footer card-outline card-secondary bg-light' >
                            </div>
                        </div>
                    </div>
                
                    ";
                        
            }
        }

    }

    if($_GET['op'] == 'registrarMascota'){
        $mascota->registrarMascota([
            "idusuario"         => $_GET["idusuario"],
            "idraza"            => $_GET["idraza"],
            "nombremascota"     => $_GET["nombremascota"],
            "genero"            => $_GET["genero"],
            "fechanacimiento"   => $_GET["fechanacimiento"],
            "observaciones"     => $_GET["observaciones"],
            "esterilizacion"    => $_GET["esterilizacion"] 
        ]);
    }
    
    if ($_GET['op'] == 'reporteAdoptados') {

        $data = $mascota->reporteAdoptados();
    
        if($data){
          echo json_encode($data);
        }else{
          echo "No existen datos";
        }
    }

    if($_GET['op'] == 'cargarMascotaPadrino'){
        $datosObtenidos = $mascota->cargarMascotaPadrino();

        if(count($datosObtenidos) == 0){
            echo "<option>No hay ninguna mascota registrada</option>";
        }else{
            echo "<option value=''>Seleccione</option>";
            foreach($datosObtenidos as $fila){
                echo "
                    <option value='$fila->idmascota'>$fila->animal - $fila->nombremascota</option>
                ";
            }
        }
    }

    if($_GET['op'] == 'cargarMascotaEvento'){
        $datosObtenidos = $mascota->cargarMascotaEvento();

        if(count($datosObtenidos) == 0){
            echo "<option>No hay ninguna mascota registrada</option>";
        }else{
            echo "<option value=''>Seleccione</option>";
            foreach($datosObtenidos as $fila){
                echo "
                    <option value='$fila->idmascota'>$fila->animal - $fila->nombremascota</option>
                ";
            }
        }
    }

    if($_GET['op'] == 'cargarMascotaAdopcion'){
        $datosObtenidos = $mascota->cargarMascotaAdopcion();

        if(count($datosObtenidos) == 0){
            echo "<option>No hay ninguna mascota registrada</option>";
        }else{
            echo "<option value=''>Seleccione</option>";
            foreach($datosObtenidos as $fila){
                echo "
                    <option value='$fila->idmascota'>$fila->animal - $fila->nombremascota</option>
                ";
            }
        }
    }
    
}
?>
