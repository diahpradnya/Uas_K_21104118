function mkdeletedata(){
    document.getElementById("mkDelete").style.display="none"
    
    let kode = document.getElementById("txkode").value;
    let dta = "txkode="+kode
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/UASPEMWEB/webproK/server/dtamk-hapusdata.php");
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(dta);

    xmlhttp.onload = function(){
        const mydta = JSON.parse(this.responseText);
        console.log(mydta);
        if(mydta["error"]==0){
            document.getElementById("sukses").style.display="block";
        }else{
            document.getElementById("gagal").style.display="none";
        }
        setTimeout(()=>{
            window.location.href="index.php?pg=mk";
        },2000)
    }
}