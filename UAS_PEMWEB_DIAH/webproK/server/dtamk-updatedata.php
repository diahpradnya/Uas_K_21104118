<?php
    $h["error"] = 1; 
    if(isset($_POST["txkode"])){
        include_once("dbkoneksi2.php");
        $kode = $_POST["txkode"];
        $matkul = $_POST["txmatkul"];
        $dosen =  $_POST["txdosen"];

        $sql = "UPDATE mk SET KODE_MK='$kode', NAMA_MK='$matkul', NAMA_DOSEN='$dosen' WHERE KODE_MK='$kode'";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);
