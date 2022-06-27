<h3>Ubah data matakuliah</h3>

<div class="alert alert-success" role="alert" id="sukses">
  Data Telah diubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal dubah
</div>

<form id="mkUpdate">
  <div class="mb-3">
    <label for="nim" class="form-label">Kode MK</label>
    <input type="text" class="form-control" id="txkode" disabled>
    <div id="nidhHelp" class="form-text">isikan kode MK.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="txmatkul">
    <div id="namaHelp" class="form-text">isikan Nama matakuliah.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Dosen</label>
    <input type="text" class="form-control" id="txdosen">
    <div id="mkHelp" class="form-text">isikan dosen.</div>
  </div>
  

  <button type="button" class="btn btn-primary" onclick="mkupdatedata()">Simpan Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="mk-caridata.js"></script>
<script src="mk-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";

  function batal(){
      location.replace("http://localhost/UASPEMWEB/webproK/client/index.php?pg=mk");
  }
</script>