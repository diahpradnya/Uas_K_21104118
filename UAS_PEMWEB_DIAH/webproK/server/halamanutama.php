<?php
session_start();
if(isset($_SESSION["login"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
    <h4><a href="index.php?act=logout">Logout</a></h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>     
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>JenisKelamin</th>
                <th>TGL Lahir</th>
            </tr>
        </thead>
        <tbody>
<?php
    include_once("dbkoneksi2.php");
    $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR FROM mhs";
    $hsl = mysqli_query($cnn, $sql);
    $nomor = 0;
    while($h = mysqli_fetch_array($hsl) ){
        $nomor++;
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>".$h["NIM"]."</td>";
        echo "<td>".$h["NAMA"]."</td>";
        echo "<td>".$h["JURUSAN"]."</td>";
        echo "<td>".$h["JK"]."</td>";
        echo "<td>".$h["TGLLAHIR"]."</td>";
        echo "</tr>";
    }
?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php
}else{
    echo "Silahkan login terlebih dahulu";
    echo "<script>";
    echo "setTimeout(()=>{
        window.location.href='index.php';
    },1000)";
    echo "</script>";
}
?>