<?php
      $usuario = $_POST['usuario'];
       
      if(!empty($usuario)) {
            comprobarUsuario($usuario);
      }
       
      function comprobarUsuario($usuario) {
            // $con = mysql_connect('sql308.eshost.com.ar','eshos_18585009', 'martin1037');
            $con = mysqli_connect('localhost','root', 'root');
            mysqli_select_db($con, 'sicautn');
       
            $sql = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario = '".$usuario."'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>El nombre de usuario esta Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
            }
      }
?>