<h3>Edit data Mahasiswa</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah diubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal diubah
</div>

<form id="mhsUpdate">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="txnim" disabled>
    <div id="nimHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">Ubah Nama mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="talag" class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control" id="txtgl">
    <div id="talagHelp" class="form-text">Ubah Tgl Lahir mahasiswa.</div>
  </div>
  
  <div class="mb-3">
    <label for="nama" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="form-control" id="txjur">
        <option value="-"> Pilih Jurusan </option>
        <option value="MTI"> MTI </option>
        <option value="KAB"> KAB </option>
        <option value="SK"> SK </option>
        <option value="DGM"> DGM </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jurusan mahasiswa.</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="mhsupdatedata()">Update Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="mhs-caridata.js"></script>
<script src="mhs-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";

  function batal(){
      location.replace("http://localhost/UASPEMWEB/webproK/client/index.php?pg=mhs");
  }
</script>