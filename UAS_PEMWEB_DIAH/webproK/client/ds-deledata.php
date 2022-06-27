<h3>Hapus data dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah dihapus
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal dihapus
</div>

<form id="dsDelete">
  <div class="mb-3">
    <label for="nim" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn" disabled>
    <div id="nidhHelp" class="form-text">ubah NIDN dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">ubah Nama dosen.</div>
  </div>
    <span id="sembunyi">
        <div class="mb-3">
        <label for="nama" class="form-label">Mata Kuliah</label>
        <input type="text" class="form-control" id="txmk">
        <div id="mkHelp" class="form-text">ubah matakuliah.</div>
    </div>
  
    <div class="mb-3">
            <label for="nama" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="txjkel">
                <option value="-"> Pilih Jenis Kelamin </option>
                <option value="L"> Laki-Laki </option>
                <option value="P"> Perempuan </option>
            </select>    
            <div id="jkelHelp" class="form-text">ubah Jenis Kelamin dosen.</div>
        </div>
    </span>

  <button type="button" class="btn btn-danger" onclick="dsdeletedata()">Delete Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="ds-caridata.js"></script>
<script src="ds-deletedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
  document.getElementById("sembunyi").style.display="none";

  function batal(){
      location.replace("http://localhost/UAS_PEMWEB_DIAH/webproK/client/index.php?pg=ds");
  }
</script>