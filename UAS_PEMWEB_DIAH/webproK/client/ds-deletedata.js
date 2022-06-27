function dsdeletedata(){
    document.getElementById("dsDelete").style.display="none"
    
    let nidn = document.getElementById("txnidn").value;
    let dta = "txNIDN="+nidn
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/UAS_PEMWEB_DIAH/webproK/server/dtdsn-hapusdata.php");
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
        },2000)
    }
}