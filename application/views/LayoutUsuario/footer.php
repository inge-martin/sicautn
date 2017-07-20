  </div>
    <?php
    $enlace = mysqli_connect("localhost", "root", "root");
    mysqli_select_db($enlace, "sicautn");
    $id_usu = $this->session->userdata('s_idUsuario');
    $resultado = mysqli_query($enlace, "SELECT acceso.fecha, acceso.entrada, acceso.salida, estacionamiento.nave, estacionamiento.lugar FROM acceso, estacionamiento WHERE acceso.id_estacionamiento = estacionamiento.id_estacionamiento AND id_usuario = '$id_usu' ORDER BY acceso.fecha DESC LIMIT 1");
    while ($fila = mysqli_fetch_assoc($resultado)) {
      echo $fila['fecha'];
      echo $fila['entrada'];
      echo $fila['salida'];
      echo $fila['nave'];
      echo $fila['lugar'];
    // }
  ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versión</b> 1.0
    </div>
    <strong>Copyright &copy; 2016 - EISSI.</strong> Todos los derechos reservados.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="glyphicon glyphicon-bell"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Notificación</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a>
              <i class="menu-icon glyphicon glyphicon-time bg-blue"></i>
              <div class="menu-info">
                <h2 class="control-sidebar-subheading text-center">Datos de Acceso</h2>
                <h4 class="control-sidebar-subheading text-center">
                  <?php echo "Fecha: " . $fila['fecha'] . "<br>H. Entrada: " . $fila['entrada']; ?></h4>
              </div>
            </a>
          </li>
          <li>
            <a>
              <i class="menu-icon fa fa-car bg-blue"></i>
              <div class="menu-info">
                <h2 class="control-sidebar-subheading text-center">Lugar de estacionamiento</h2>
                <h4 class="control-sidebar-subheading text-center"><?php echo $fila['nave']. "<br>Lugar: " . $fila['lugar']; ?></h4>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>

<?php } ?>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>


<?php  
  if($this->uri->segment(1)== 'cPersonal') { ?>
<script src="<?php echo base_url(); ?>js/CombosPersonal.js"></script>
<?php } ?>
</body>
</html>