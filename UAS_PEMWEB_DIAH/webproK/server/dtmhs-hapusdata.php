<?php
   $output["error"] = true;
   if(isset($_POST["txNIM"])){ 
       $cx = $_POST["txNIM"]; 
       include_once("dbkoneksi2.php");
       $sql = "DELETE FROM mhs WHERE NIM='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["error"] = false;
   }

   echo json_encode($output);