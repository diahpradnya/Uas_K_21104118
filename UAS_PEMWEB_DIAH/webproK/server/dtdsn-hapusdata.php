<?php
   $output["error"] = true;
   if(isset($_POST["txNIDN"])){ 
       $cx = $_POST["txNIDN"]; 
       include_once("dbkoneksi2.php");
       $sql = "DELETE FROM dosen WHERE NIDN='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["error"] = false;
   }

   echo json_encode($output);