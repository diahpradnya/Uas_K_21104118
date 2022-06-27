<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIM"])){
        include_once("dbkoneksi2.php");
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $jur =  $_POST["txJUR"];
        $jkel = $_POST["txJKEL"];
        $talag = $_POST["txTALAG"];

        $sql = "UPDATE mhs SET 
            NAMA='$nama',
            JURUSAN='$jur',
            JK='$jkel',
            TGLLAHIR='$talag' 
            WHERE NIM='$nim'";
            
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);