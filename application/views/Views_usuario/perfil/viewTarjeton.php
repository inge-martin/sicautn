<!-- Perfil -->
<?php
    require_once 'application/controllers/Controller_usuario/cPerfil.php';
    require_once 'application/models/modelosUsuario/mPerfil.php';
    $model = new  mPerfil();

?>
<!-- Vehiculo -->
<?php
    require_once 'application/controllers/Controller_usuario/cVehiculo.php';
    require_once 'application/models/modelosUsuario/mVehiculo.php';
    $modelVehiculo = new mVehiculo();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SICAUTN</title>
        <link rel="icon" href="<?php echo base_url(); ?>/assets/favicon.ico">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Font Awesome-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.min.css"> 


        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body class="hold-transition skin-blue layout-boxed sidebar-mini">
        <div class="wrapper">
            <center>
                <section class="content">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <center>
                        <table>
                            <?php 
                                //aqui envias la variable de session
                                $id_usu = $this->session->userdata('s_idUsuario');
                                foreach($model->Listar($id_usu) as $r): 
                            ?>
                            <tr>
                                <td width="20%" align="left" valign="middle">
                                    <img src="<?php echo base_url(); ?>assets/image/carrusel/5.png" style="height:100px; width: 100px" class="text-left">
                                </td>
                                <td width="60%" align="center" valign="middle">
                                    <h1 class="text-center">TARJETON OFICIAL DE INGRESO</h1>
                                </td>
                                <td width="20%" align="right" valign="middle">
                                    <img src="<?php echo base_url(); ?>assets/image/carrusel/6.png" style="height:100px; width: 130px" class="text-right">
                                </td>
                            </tr>
                        </table>
                        <hr>
                        </center>
                        <h3 class="text-center"><?php echo strtoupper($r->__GET('nombre') . ' ' . $r->__GET('ap_paterno') . ' ' . $r->__GET('ap_materno'))?></h3><br>
                        <div>
                            <div class="text-center">
                                <img style="height: 250px; width: 250px;" align="center" class="profile-user-img img-responsive img-circle text-center" src="<?php echo base_url(); ?>uploads/imagenes/<?php echo $this->session->userdata('s_foto'); ?>">
                                <br><br><br>
                                <h3 class="profile-username text-center">DATOS PERSONALES DE ACCESO</h3>
                                <br>
                                <p class="text-muted text-center"><img alt="testing" src="<?php echo base_url(); ?>js/barcode.php?text=<?php echo $r->__GET('matricula'); ?>&size=40" width="250px"/></p>
                                <br>
                                <table align="center">
                                    <tr>
                                        <td>
                                        <h3><b>Usuario:</b></h3></td>
                                        <td width="10px"></td>
                                        <td><h3><b><?php echo $r->__GET('id_tipo_usuarios'); ?></b></h3></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <h3><b>Matricula:</b></h3></td>
                                        <td width="10px"></td>
                                        <td><h3><b><?php echo strtoupper($r->__GET('matricula')); ?></b></h3></td>
                                    </tr>
                                    <tr> 
                                        <td>
                                        <h3><b>Email:</b></h3></td>
                                        <td width="10px"></td>
                                        <td><h3><b><?php echo $r->__GET('email'); ?></b></h3></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <h3><b>Licencia:</b></h3></td>
                                        <td width="10px"></td>
                                        <td><h3><b><?php echo $r->__GET('licencia'); ?></b></h3></td>
                                    </tr>                                    
                                    <?php endforeach; ?>
                                    <!-- Vehiculo -->
                                      <?php 
                                          //aqui envias la variable de session
                                          $id_usu = $this->session->userdata('s_idUsuario');                       
                                          foreach($modelVehiculo->Listar($id_usu) as $r): 
                                      ?>        
                                    <tr>
                                        <td>
                                        <h3><b>Placas:</b></h3></td>
                                        <td width="10px"></td>
                                        <td><h3><b><?php echo strtoupper($r->__GET('placas')); ?></b></h3></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <h3><b>Modelo:</b></h3></td>
                                        <td width="10px"></td>
                                        <td><h3><b><?php echo strtoupper($r->__GET('modelo')); ?></b></h3></td>
                                    </tr>   
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </section>
            </center>
        </div>
        <!-- /.content-wrapper -->
        <br><br>
        <center>
        <footer class="main-footer text-center">
            <strong class="text-center">Copyright &copy; 2016 - EISSI.</strong> Todos los derechos reservados.
        </footer>
        </center>
        <!-- ./wrapper -->
    </body>
</html>
