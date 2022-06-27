function dsupdate(){
    document.getElementById("dsbaru").style.display="none"
    
    let nidn = document.getElementById("txnidn").value;
    let nama = document.getElementById("txnama").value;
    let jkel = document.getElementById("txjkel").value;
    let mk = document.getElementById("txmk").value;
    let dta = "txNIDN="+nidn+"&txNAMADSN="+nama+"&txJKELDSN="+jkel+"&txMK="+mk
    //console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/UAS_PEMWEB_DIAH/webproK/server/dtadsn-insertdata.php");
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
            window.location.href="index.php?pg=ds";
        },5000)
    }
}