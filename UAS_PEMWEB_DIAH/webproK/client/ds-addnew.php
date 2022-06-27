<h3>Tambah data dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah ditambahkan
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambahkan
</div>

<form id="dsbaru">
  <div class="mb-3">
    <label for="nim" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn">
    <div id="nidhHelp" class="form-text">isikan NIDN dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">isikan Nama dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="txmk">
    <div id="mkHelp" class="form-text">isikan matakuliah.</div>
  </div>
  
  <div class="mb-3">
    <label for="nama" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin dosen.</div>
  </div>


  <button type="button" class="btn btn-primary" onclick="dsupdate()">Simpan Data</button>
</form>

<script src="ds-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>