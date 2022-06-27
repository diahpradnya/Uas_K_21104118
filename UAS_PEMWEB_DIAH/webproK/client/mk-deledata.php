<h3>Hapus data matakuliah</h3>

<div class="alert alert-success" role="alert" id="sukses">
  Data Telah dihapus
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal dihapus
</div>

<form id="mkDelete">
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
    <span id="sembunyi">
    <div class="mb-3">
        <label for="nama" class="form-label">Dosen</label>
        <input type="text" class="form-control" id="txdosen">
        <div id="mkHelp" class="form-text">isikan dosen.</div>
    </div>
    </span>
  

  <button type="button" class="btn btn-danger" onclick="mkdeletedata()">Hapus Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="mk-caridata.js"></script>
<script src="mk-deletedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
  document.getElementById("sembunyi").style.display="none";

  function batal(){
      location.replace("http://localhost/UASPEMWEB/webproK/client/index.php?pg=mk");
  }
</script>