<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .spasi{padding-top: 30px;}
    </style>
</head>
<body>
    
    <div class="container">
        <form>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" id="txNIM" class="form-control">
            </div>
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" id="txNAMA" class="form-control">
            </div>
            <div class="form-group">
                <label>Tgl Lahir</label>
                <input type="date" id="txTALAG" class="form-control">
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select id="txJUR" class="form-control">
                    <option value="-"> Silahkan Pilih Jurusan </option>
                    <option value="MTI"> MTI </option>
                    <option value="KAB"> KAB </option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select id="txJKEL" class="form-control">
                    <option value="-"> Silahkan Pilih Jenis Kelamin </option>
                    <option value="L"> Laki-Laki </option>
                    <option value="P"> Perempuan </option>
                </select>
            </div>
            <div class="form-group spasi">
                <button class="btn btn-primary"> Simpan Data </button>                
            </div>
        </form>
    </div>

</body>
</html>