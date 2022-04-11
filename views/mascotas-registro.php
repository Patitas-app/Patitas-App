
<style>
  .container{
    min-height: 90vh; 
  }
  .card{
    margin: auto;
  }
</style>
<div class="container">
<div class=" card card-outline card-info">
    <div class="card-header">
      <p class="card-title" style="font-size: 22px">Registro de Mascotas</p>
      <a href="main.php?view=mascotas-lista">
        <button style="background-color: white;" type="button" class="btn btn-lg float-right"><i class="fas fa-clipboard-list"></i> &nbsp;Listar en tabla</button>
      </a>
    </div>
    <!-- /.card-header -->
    
    <div class="card-body">
        <form action="" id="formularioRegistroMascota">
          <div class="form-group">
            <label for="">PERSONA</label>
            <input class="form-control" id="idusuario" type="text">
          </div>

          <div class="row form-group">
              <div class="col-md-6">
                <label>Animales</label>
                <select id="idanimal" class="form-control select2 form-control-border cargar" style="width: 100%;">
                  <option value="">Seleccione</option>
                  <option value="1">Perros</option>
                  <option value="2">Gatos</option>
                </select>
              </div>
              <div class="col-md-6">
                <label>Razas</label>
                <select id="razas" class="form-control select2 form-control-border" style="width: 100%;">
                  <!-- Carga de manera dinamica -->
                </select>
              </div>
          </div>

          <div class="form-group">
              <label for="nombremascota">Nombre de la mascota</label>
              <input type="text" class="form-control form-control-border" id="nombremascota" placeholder="Nombre de la mascota">
          </div>

          <div class="form-group">
              <label for="genero">Genero</label>
              <select id="genero" class="form-control select2 form-control-border" style="width: 100%;">
                  <option value="">Seleccione</option>
                  <option value="M"> Macho </option>
                  <option value="H"> Hembra </option>
              </select>
          </div>

          <div class="form-group">
            <label for="fechanacimiento">Fecha Nacimiento</label>
            <input class="form-control select2 form-control-border" id="fechanacimiento" type="date">
          </div>
          <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control select2 form-control-border" id="observaciones" cols="15" rows="5"></textarea>
          </div>

          <div class="form-group">
            <label for="esterilizacion">Esterilizado</label>
            <select name="" class="form-control select2 form-control-border" id="esterilizacion">
              <option value="">Seleccione</option>
              <option value="S"> SI </option>
              <option value="N"> NO </option>
            </select>
          </div>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-right bg-white">
      <button type="reset" class="btn bg-gradient-secondary " id="cancelar">Cancelar</button>
      <button type="button" class="btn bg-gradient-info" id="registrarMascota">Registrar</button>
    </div>
    <!-- /.card-footer -->
  </div>
  <br>
</div>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- /.card -->
  <script>
  $(document).ready(function(){

    $("#cancelar").click(function(){
        $("#formularioRegistroMascota")[0].reset();
    });

    function registrarMascota(){
      let idusuario = $("#idusuario").val();
      let idraza = $("#razas").val();
      let nombremascota = $("#nombremascota").val();
      let genero = $("#genero").val();
      let fechanacimiento = $("#fechanacimiento").val();
      let observaciones = $("#observaciones").val();
      let esterilizacion = $("#esterilizacion").val();

      // Validacion
      if(idusuario == "" ||  idraza == "" || nombremascota == "" || genero == "" || fechanacimiento == "" || observaciones == "" || esterilizacion== "" ){
        Swal.fire({
          icon: 'warning',
          title: 'Por favor complete todos los campos, son obligatorios'
        });
      }else{
        Swal.fire({
          icon: 'question',
          title: 'PATITAS APP',
          text: '¿Está seguro de registrar?',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          confirmButtonText:  'Confirmar'
        }).then((result)=> {
          if(result.isConfirmed){
            var datos = {
              'op'       : 'registrarMascota',
              'idusuario'       : idusuario,
              'idraza'          : idraza,
              'nombremascota'   : nombremascota,
              'genero'          : genero,
              'fechanacimiento' : fechanacimiento,
              'observaciones'     : observaciones,
              'esterilizacion'    : esterilizacion
            };

            $.ajax({
              url:'controllers/Mascota.controller.php',
              type: 'GET',
              data: datos,
              success: function(e){
                Swal.fire({
                  icon: 'success',
                  title: 'Registrado correctamente'
                });
                $("#formularioRegistroMascota")[0].reset();
              }
            });
          }
        });
      }
    }

    $("#idanimal").change(function (){
        let animal = $("#idanimal").val();
        
        $.ajax({
            url: 'controllers/Raza.controller.php',
            type: 'GET',
            data: 'op=cargarRazas&idanimal=' + animal,
            success: function(e){
                $("#razas").html(e)
            }
        });
    });

    
    $("#registrarMascota").click(registrarMascota);

  });
  
</script>