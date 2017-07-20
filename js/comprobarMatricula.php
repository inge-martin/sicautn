<?php
      $matricula = $_POST['matricula'];
       
      if(!empty($matricula)) {
            comprobarMatricula($matricula);
      }
       
      function comprobarMatricula($matricula) {
            // $con = mysql_connect('sql308.eshost.com.ar','eshos_18585009', 'martin1037');
            $con = mysqli_connect('localhost','root', 'root');
            mysqli_select_db($con, 'sicautn');
       
            $sql = mysqli_query($con, "SELECT * FROM personal WHERE matricula = '".$matricula."'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>La matricula esta Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>La matricula ya existe en el sistema.</span>";
            }
      }
?>