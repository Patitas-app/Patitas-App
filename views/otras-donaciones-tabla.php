<?php
    require_once 'datatable.php';
    require_once 'acceso-seguro.php';
    if($_SESSION['nivelacceso']!= "C"){
        echo "<strong>No tiene el nivel de acceso requerido</strong>";
        exit();
    }
?>

<div class="row">
    <div class="col-md-12">
        <div  class="card card-outline card-info  ml-3 mr-3">
            <div class="card-header">
                <p class="card-title mt-2" style="font-size: 22px">Otras Donaciones</p>
                <a href="main.php?view=donaciones-registro">
                    <button style="background-color: white;" type="button" class="btn btn-lg float-right"><i class="fas fa-arrow-circle-left"></i> &nbsp;Volver</button>
                </a>
            </div>
            <div class="card-body table-responsive">
                <table class="table" id="tablaOtrasDonaciones">
                    <thead>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Donante</th>
                            <th class="text-center">Tipo de Apoyo</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Descripción</th>
                        </tr>
                    </thead>
                    <tbody class="table" id="otrasDonaciones">
                        <!-- Se carga de manera dinamica -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        function listarOtrasDonaciones(){
            $.ajax({
                url: 'controllers/Donacion.controller.php',
                type: 'GET',
                data: 'op=otrasDonaciones',
                success: function(e){
                    var tabla = $("#tablaOtrasDonaciones").DataTable();
                    tabla.destroy();
                    $("#otrasDonaciones").html(e);
                    $("#tablaOtrasDonaciones").DataTable({
                        language: { url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json' },
                        columnDefs: [
                        {
                            visible: true,
                            searchable: true
                        }
                        ],
                        dom: 'Bfrtip',
                        buttons: ['copy', 'print', 'pdf', 'excel']
                    });
                }
            });
        }
        listarOtrasDonaciones();
    });
</script>