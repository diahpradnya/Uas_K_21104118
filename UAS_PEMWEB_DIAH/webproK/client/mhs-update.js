function mhsupdate(){
    document.getElementById("mhsbaru").style.display="none"
    
    let nim = document.getElementById("txnim").value;
    let nama = document.getElementById("txnama").value;
    let jkel = document.getElementById("txjkel").value;
    let tgl = document.getElementById("txtgl").value;
    let jur = document.getElementById("txjur").value;
    let dta = "txNIM="+nim+"&txNAMA="+nama+"&txJKEL="+jkel+"&txTALAG="+tgl+"&txJUR="+jur
    //console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/UASPEMWEB/webproK/server/dtamhs-insertdata.php");
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
        },5000)
    }
}