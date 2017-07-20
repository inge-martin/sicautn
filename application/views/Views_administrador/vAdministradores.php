<!-- script´s -->
  <!-- Validar personal en la base de datos -->
  <script type="text/javascript">
    $(document).ready(function(){

      //comprobamos si se pulsa una tecla
      $("#validar").click(function(e){

        //hace la búsqueda
        $("#resultado").html("<img src='../assets/ajax-loader.gif' />");
        $("#resultado").delay(1000).queue(function(n) {    

          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>js/comprobarPersonal.php",
            data: {matricula: $("#matricula").val(), nombre: $("#nombre").val(), paterno: $("#paterno").val()     , materno: $("#materno").val()},
            dataType: "html",
            error: function(){
              alert("error petición ajax");
            },
            success: function(data){                                                      
              $("#resultado").html(data);
              n();
              if(data == "0"){//0 disponible     1 existente ocupado
                alert("El usuario se encuentra Disponible.");
                mostrar();
                deshabilitar();
              }else{
                $("#matricula").val("");
                $("#nombre").val("");
                $("#paterno").val("");
                $("#materno").val("");
                alert("El usuario ya existe en el sistema.");
              }
            }
          });//$.ajax
        });//$("#resultado")
      });//$("#validar")
    });//$(document).ready
  </script>

  <!-- Validar usuario en la base de datos -->
  <script type="text/javascript">
    $(document).ready(function(){

      var consulta;

      //comprobamos si se pulsa una tecla
      $("#usuario").keyup(function(e){
        //obtenemos el texto introducido en el campo
        consulta = $("#usuario").val();

        $("#resultado1").html("<img src='../assets/ajax-loader.gif' />");
        //hace la búsqueda
        $("#resultado1").delay(1000).queue(function(n) {      

          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>js/comprobarUsuario.php",
            data: "usuario="+consulta,
            dataType: "html",
            error: function(){
            alert("error petición ajax");
            },
            success: function(data){                                                      
              $("#resultado1").html(data);
              n();
            }
          });

        });

      });

    });
  </script>

  <!-- Validar matricula en la base de datos -->
  <script type="text/javascript">
    $(document).ready(function(){

      var consulta;

      //comprobamos si se pulsa una tecla
      $("#matricula").keyup(function(e){
        //obtenemos el texto introducido en el campo
        consulta = $("#matricula").val();

        $("#resultado5").html("<img src='../assets/ajax-loader.gif' />");
        //hace la búsqueda
        $("#resultado5").delay(1000).queue(function(n) {      

          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>js/comprobarMatricula.php",
            data: "matricula="+consulta,
            dataType: "html",
            error: function(){
            alert("error petición ajax");
            },
            success: function(data){                                                      
              $("#resultado5").html(data);
              n();
            }
          });

        });

      });

    });
  </script>

  <!-- comprobarContraseña -->
  <script> 
    function comprobarClave(){ 
      clave1 = document.formulario.txtContrasena.value 
      clave2 = document.formulario.txtContrasena1.value 

      if (clave1.length == 0 || clave2.length == 0) {
        alert("Los campos de la contraseña no pueden quedar vacios");
        return false;
      }

      if (clave1 != clave2) {
        alert("Las contraseñas deben de coincidir");
        return false;
      } else {
        //alert("Todo esta correcto");
        return true; 
      }

      var espacios = false;
      var cont = 0;
       
      while (!espacios && (cont < clave1.length)) {
        if (clave1.charAt(cont) == " ")
          espacios = true;
        cont++;
      }
       
      if (espacios) {
        alert ("La contraseña no puede contener espacios en blanco");
        return false;
      }
    }
  </script>

  <!-- echo -->
  <script type="text/javascript">

    var baseurl = "<?php echo base_url(); ?>";
  </script>

  <!-- soloLetras/soloNumeros -->
  <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
  </script>

  <!-- mostrar y deshabilitar-->
  <script type="text/javascript">
    function mostrar(){
      document.getElementById('oculto1').style.display = 'block';
      document.getElementById('oculto2').style.display = 'block';
      document.getElementById('oculto3').style.display = 'block';
    }

    function deshabilitar(){
      document.getElementById('matricula').readOnly = 'true';
      document.getElementById('nombre').readOnly = 'true';
      document.getElementById('paterno').readOnly = 'true';
      document.getElementById('materno').readOnly = 'true';
      document.getElementById('validar').disabled = 'true';
    }
  </script>
<!-- //script´s -->

<section class="content">
  <form class="form-horizontal" action="<?php echo base_url(); ?>Controller_administrador/cAdministradores/guardar" method="POST" enctype="multipart/form-data" name="formulario">

    <!-- /.Datos Para Validar -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Datos Principales del Personal</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
        <h4 class="attachment-block clearfix">
          Para continuar con el registro del personal, es necesario que ingreses sus datos principales para poder verificar su autenticidad.
        </h4><br>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Matricula:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="matricula" placeholder="Ingresa tu Matricula" name="txtMatricula" required onkeypress="return soloNumeros(event)" maxlength="10" autofocus="true">
              <div id="resultado5"></div>    
            </div>

            <label for="input1" class="col-sm-2 control-label">Nombre:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="txtNombre" required onkeypress="return soloLetras(event)" maxlength="15">
            </div>           
          </div>           
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Apellido Paterno:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="paterno" placeholder="Ingresa tu Apellido Paterno" name="txtApPaterno" required onkeypress="return soloLetras(event)" maxlength="15">
            </div>           
            <label for="input1" class="col-sm-2 control-label">Apellido Materno:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="materno" placeholder="Apellido Materno" name="txtApMaterno" required onkeypress="return soloLetras(event)" maxlength="15">
            </div>            
          </div> 
          <div> 
            <button id="validar" class="btn btn-info pull-right">Validar</button> 
          </div>                
          <center><div id="resultado" style="color: white;"></div></center>

        </div><!-- /.box-body -->
      </div>
    </div><!-- /.Datos Para Validar -->

    <!-- Datos Personales -->
    <div class="box box-default" id='oculto1' style='display:none;'>
      <div class="box-header with-border">
        <h3 class="box-title">Datos Personales</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Tipo de Usuario:</label>
            <div class="col-sm-4">
              <select id="cboTipoUsuarioAdmin" name="txtTipoUsuario" class="col-sm-8 form-control">
              </select>
            </div>          
            <label for="input1" class="col-sm-2 control-label">Fecha de Nacimiento:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="input1" placeholder="Formato yyyy-mm-dd" name="txtFechaNaci" required>
            </div>             
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Sexo:</label>
            <div class="col-sm-4">
              <select class="col-sm-3 form-control" name="txtSexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
            </div>
            <label for="input1" class="col-sm-2 control-label">CURP:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" placeholder="CURP" name="txtCurp" required maxlength="13">
            </div> 
          </div>            
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Teléfono Casa:</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="input1" placeholder="Ingresa tu Teléfono" name="txtTelCasa" required onkeypress="return soloNumeros(event)" maxlength="10">
            </div>
            <label for="input1" class="col-sm-2 control-label">Teléfono Celular:</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="input1" placeholder="Ingresa tu Teléfono (5512345678)" name="txtTelCel" required onkeypress="return soloNumeros(event)" maxlength="10" data-inputmask='"mask": "(55) 57-31-69-78"' data-mask>
            </div>              
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Licencia:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" placeholder="Licencia" name="txtLicencia" required maxlength="10">
            </div>  
            <label for="input1" class="col-sm-2 control-label">Turno:</label>
            <div class="col-sm-4">
              <select class="col-sm-8 form-control" name="txtTurno" required="">
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
              </select>
            </div>            
          </div>           
          <div class="form-group">
            <label for="exampleInputFile" class="col-sm-2 control-label">Foto:</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="exampleInputFile" name="txtFoto" required>
            </div>
            <!-- <label for="input1" class="col-sm-2 control-label">Carrera:</label> -->
            <div class="col-sm-4">
              <input type="hidden" class="form-control" name="txtCarrera" value="0">
            </div>          
          </div>
        </div><!-- /.box-body -->
      </div>
    </div><!-- /.Datos Personales -->

    <!-- Dirección -->
    <div class="box  box-default" id='oculto2' style='display:none;'>
      <div class="box-header with-border">
        <h3 class="box-title">Dirección</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
        <div class="col-md-6">
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">Estado:</label>
            <div class="col-sm-8">
              <select id="cboEstados" name="txtEstado" class="col-sm-8 form-control">
              <option>Selecciona uno</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">Municipio:</label>
            <div class="col-sm-8">
              <select id="cboMunicipios" name="txtMunicipio" class="col-sm-8 form-control">
              <option>Selecciona uno</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">Localidad:</label>
            <div class="col-sm-8">
              <select id="cboLocalidades" name="txtLocalidad" class="col-sm-8 form-control">
              <option>Selecciona uno</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">CP:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Ingresa tu CP" name="txtCp" required onkeypress="return soloNumeros(event)" maxlength="6">
            </div>                                    
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">Calle:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Ingresa tu Calle" name="txtCalle" required maxlength="20">
            </div>
          </div>
          <div class="form-group">                             
            <label for="input1" class="col-sm-4 control-label">Número:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Número" name="txtNumero" required onkeypress="return soloNumeros(event)" maxlength="5">
            </div>
          </div>
          <div class="form-group">                               
            <label for="input1" class="col-sm-4 control-label">Lote:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Lote opcional" name="txtLote" maxlength="10">
            </div>
          </div>
          <div class="form-group">                         
            <label for="input1" class="col-sm-4 control-label">Manzana:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Manzana opcional" name="txtManzana" maxlength="13">
            </div>                                                            
          </div>
        </div>
        </div><!-- /.box-body -->
      </div>
    </div><!-- /.Dirección -->
    
    <!-- Datos de Acceso -->
    <div class="box  box-default" id='oculto3' style='display:none;'>
      <div class="box-header with-border">
        <h3 class="box-title">Datos De Acceso</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">E-mail:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputPassword3" placeholder="Ingresa tu E-mail" name="txtEmail" required>
            </div>
            <label for="inputEmail3" class="col-sm-2 control-label">Usuario:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu Usuario" name="txtUsuario" required maxlength="15">
              <div id="resultado1"></div>                
            </div>                                        
          </div>                
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Contraseña:</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Ingresa tu Contraseña" name="txtContrasena" required minlength="5" maxlength="15">
            </div>   
            <div id="Info"></div>
            <label for="inputPassword3" class="col-sm-2 control-label">Repite Contraseña:</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Ingresa de nuevo tu Contraseña" name="txtContrasena1" required minlength="5" maxlength="15">
            </div>               
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right" value="Guardar" onClick="return comprobarClave()">Guardar</button>
        </div>
        <!-- /.box-footer -->
      </div>
    </div><!-- /.Datos de Acceso -->

  </form>
  <?php echo $error; ?>
</section>
