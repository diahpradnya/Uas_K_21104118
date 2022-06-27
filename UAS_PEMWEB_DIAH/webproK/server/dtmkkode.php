<?php
   $output["error"] = true;
   if(isset($_GET["kode"])){ 
       $cx = $_GET["kode"]; 
       include_once("dbkoneksi2.php");
       $sql = "SELECT KODE_MK, NAMA_MK, NAMA_DOSEN FROM mk WHERE KODE_MK='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["isi"] = mysqli_fetch_all($hsl);
       $output["error"] = false;
       $output["sql"] = $sql;
   }

   echo json_encode($output);