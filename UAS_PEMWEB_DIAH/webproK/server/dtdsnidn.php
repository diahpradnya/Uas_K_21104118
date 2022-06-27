<?php
   $output["error"] = true;
   if(isset($_GET["nidn"])){ 
       $cx = $_GET["nidn"]; 
       include_once("dbkoneksi2.php");
       $sql = "SELECT NIDN, NAMA, MK, JK FROM dosen WHERE NIDN='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["isi"] = mysqli_fetch_all($hsl);
       $output["error"] = false;
       $output["sql"] = $sql;
   }

   echo json_encode($output);