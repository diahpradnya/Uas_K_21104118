<?php
   $output["error"] = true;
   if(isset($_POST["txkode"])){ 
       $cx = $_POST["txkode"]; 
       include_once("dbkoneksi2.php");
       $sql = "DELETE FROM mk WHERE KODE_MK='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["error"] = false;
   }

   echo json_encode($output);