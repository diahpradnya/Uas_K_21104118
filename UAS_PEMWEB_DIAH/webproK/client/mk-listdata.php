<div id="konten"></div>
<script>
  const xmlhttp = new XMLHttpRequest()
  xmlhttp.open("GET","http://localhost/UASPEMWEB/webproK/server/mk-index.php")
  xmlhttp.send()

  xmlhttp.onload = function(){
    const mydta = JSON.parse(this.responseText)
    let tx = '<h3>List Data Matakuliah</h3><table class="table table-hover">'
        tx += '<thead><tr><th scope="col">#</th><th scope="col">Kode MK</th><th scope="col">Matakuliah</th><th scope="col">Nama Dosen</th><th scope="col"><a href="index.php?pg=mk&sp=baru" class="btn btn-primary">Baru</a></th></tr></thead><tbody>'
    let no = 1
        for(i=0;i<mydta.length;i++){
    tx +='<tr>'
    tx +='<th scope="row">'+no+'</th>'
    tx +='  <td>'+mydta[i][0]+'</td>'
    tx +='  <td>'+mydta[i][1]+'</td>'
    tx +='  <td>'+mydta[i][2]+'</td>'
    tx +='  <td>'
    tx +='      <a href="index.php?pg=mk&sp=edit&kode='+mydta[i][0]+'" class="badge bg-primary"> Edit </a>'
    tx +='      <a href="index.php?pg=mk&sp=dele&kode='+mydta[i][0]+'" class="badge bg-danger"> Hapus </a>'
    tx +='  </td>'
    tx +='</tr>'
    no++
        }
  tx +='</tbody></table>'

    document.getElementById("konten").innerHTML = tx
  }
</script>  