function mhsdeletedata(){
    document.getElementById("mhsDelete").style.display="none"
    
    let nim = document.getElementById("txnim").value;
    let dta = "txNIM="+nim
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/UASPEMWEB/webproK/server/dtmhs-hapusdata.php");
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
            window.location.href="index.php?pg=mhs";
        },2000)
    }
}