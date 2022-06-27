<?php
if(isset($_GET['pg'])){
  if($_GET['pg']=="mhs"){
    $titlepage = "List Data Mahasiswa";
    $pg = "mhs-listdata.php"; 
    if(isset($_GET['sp'])){
      if($_GET['sp']=="baru"){
          $titlepage = "Tambah Data Mahasiswa";
          $pg = "mhs-addnew.php"; 
      }
      if($_GET["sp"]=="edit"){
          $titlepage = "Edit Data Mahasiswa";
          $pg = "mhs-editdata.php"; 
      }
      if($_GET["sp"]=="dele"){
          $titlepage = "Hapus Data Mahasiswa";
          $pg = "mhs-deledata.php"; 
      }
    }
  }
  if($_GET['pg']=="mk"){
    $titlepage = "List Data Matakuliah";
    $pg = "mk-listdata.php"; 
    if(isset($_GET['sp'])){
      if($_GET['sp']=="baru"){
          $titlepage = "Tambah Data Matakuliah";
          $pg = "mk-addnew.php"; 
      }
      if($_GET["sp"]=="edit"){
          $titlepage = "Edit Data Matakuliah";
          $pg = "mk-editdata.php"; 
      }
      if($_GET["sp"]=="dele"){
          $titlepage = "Hapus Data Matakuliah";
          $pg = "mk-deledata.php"; 
      }
    }
  }
  if($_GET['pg']=="ds"){
    $titlepage = "List Data Dosen";
    $pg = "ds-listdata.php"; 
    if(isset($_GET['sp'])){
      if($_GET['sp']=="baru"){
          $titlepage = "Tambah Data Dosen";
          $pg = "ds-addnew.php"; 
      }
      if($_GET["sp"]=="edit"){
          $titlepage = "Edit Data Dosen";
          $pg = "ds-editdata.php"; 
      }
      if($_GET["sp"]=="dele"){
          $titlepage = "Hapus Data Dosen";
          $pg = "ds-deledata.php"; 
      }
    }
  }
}else{
    $titlepage = "Informasi Data Mahasiswa";
    $pg = "pageutama.php";  
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titlepage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">DataMahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=mhs">DataMahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=mk">DataMatakuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=ds">DataDosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

<?php
    include_once($pg);
?>

</div>

</body>
</html>