<?php
 include_once("dbkoneksi2.php");
 $ds = "SELECT KODE_MK, NAMA_MK, NAMA_DOSEN FROM mk";
 $hsl = mysqli_query($cnn, $ds);
 $output = mysqli_fetch_all($hsl);
 echo json_encode($output);

