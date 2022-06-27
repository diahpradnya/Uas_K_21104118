<?php
   $output["error"] = true;
   if(isset($_GET["nim"])){ 
       $cx = $_GET["nim"]; 
       include_once("dbkoneksi2.php");
       $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR FROM mhs WHERE NIM='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["isi"] = mysqli_fetch_all($hsl);
       $output["error"] = false;
       $output["sql"] = $sql;
   }

   echo json_encode($output);