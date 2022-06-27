<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIDN"])){
        include_once("dbkoneksi2.php");
        $nidn = $_POST["txNIDN"];
        $namadsn = $_POST["txNAMADSN"];
        $mk =  $_POST["txMK"];
        $jkeldsn = $_POST["txJKELDSN"];
        

        $sql = "UPDATE dosen SET 
                NAMA = '$namadsn',
                MK = '$mk',
                JK = '$jkeldsn' WHERE NIDN = '$nidn'";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);
