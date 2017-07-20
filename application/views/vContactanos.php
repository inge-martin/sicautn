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
<section class="content">
  <div align="center">
    <h1>¿Comó localizarnos?</h1>
  </div>
  <div class="container">
    <div class="col-sm-5 text-center">
      <div class="gmap">
        <iframe width="450" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTzxBuRnj0YUR0WXfPdUaOR0&key=AIzaSyC_IE5XwUn1T7eof2hD9qQwBtofBv1sie4" allowfullscreen>
        </iframe>
      </div>
    </div>
    <div class="col-sm-7 map-content">
      <ul class="row">
        <li class="col-sm-6">
          <address>
            <h5>UNIVERSIDAD TECNOLÓGICA DE NEZAHUALCÓYOTL</h5>
            <p>Cto. Universidad Tecnológica s/n Col. Benito Juárez<br>
            Nezahualcóyotl, Estado de México, C.P. 57000 </p>
            <p>Teléfonos: 57169700,<br>
            Interior de la República: 01 (55) 5716  9700 <br>
            E-mail: webmaster@utn.edu.mx
          </address>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="content">
<div class="row">
  <form name="frmContacto" method="post" action="<?php echo base_url(); ?>cContactanos/guardar">
    <div class="box box-info">
      <div class="box-header">
        <i class="fa fa-envelope"></i>

        <h3 class="box-title">Escribenos un Email</h3>
        <!-- tools box -->
        <!-- /. tools -->
      </div>
      <div class="box-body">
          <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="Nombre:" maxlength="20" onkeypress="return soloLetras(event)" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Apellidos" maxlength="20" onkeypress="return soloLetras(event)" required="required">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Tú Dirección de Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="telephone" placeholder="Teléfono" maxlength="10" onkeypress="return soloNumeros(event)" required="required">
          </div>
          <div>
            <textarea class="textarea" placeholder="Mensaje" name="comments" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" maxlength="250" required="required"></textarea>
          </div>
      </div>
      <div class="box-footer clearfix">
        <input type="submit" class="pull-right btn btn-default" id="sendEmail"></input>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <?php if(!empty($mensaje)){ ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-info"></i> Alerta!</h5>
        <center><h4><?php echo $mensaje; ?></h4></center>
      </div>
  <?php  } ?>
  </div>
</div>
</section>