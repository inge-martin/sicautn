<?php

      $matricula  = $_POST['matricula'];
      $nombre     = $_POST['nombre'];
      $paterno    = $_POST['paterno'];
      $materno    = $_POST['materno'];
       
      if(!empty($matricula) && !empty($nombre) && !empty($paterno) && !empty($materno)) {
            comprobarDisponibilidad($matricula, $nombre, $paterno, $materno);
      }
      function comprobarDisponibilidad($matricula, $nombre, $paterno, $materno) {
            // $con = mysql_connect('sql308.eshost.com.ar','eshos_18585009', 'martin1037');
            $con = mysqli_connect('localhost','root', 'root');
            mysqli_select_db($con, 'sicautn');

            $sql = mysqli_query($con, " SELECT * FROM personal WHERE matricula = '".$matricula."' " .
                                    " and nombre = '".$nombre."' and ap_paterno = '".$paterno."' " .
                                    " and ap_materno = '".$materno."' ");        
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo 0;
                  //echo "<span style='font-weight:bold;color:green;'>El usuario se encuentra Disponible.</span>";
            }else{
                  echo 1;
                  //echo "<span style='font-weight:bold;color:red;'>El usuario ya existe en el sistema .</span>";
            }
      } 


?>