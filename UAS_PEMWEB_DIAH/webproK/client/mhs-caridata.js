let qs = window.location.search;
let urlp = new URLSearchParams(qs);
let carinim = urlp.get("nim");

let urltarget = new URL("http://localhost/UAS_PEMWEB_DIAH/webproK/server/dtmhsnim.php");
urltarget.searchParams.set("nim",carinim);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txnim").value = dta["isi"][i][0];
        document.getElementById("txnama").value = dta["isi"][i][1];
        document.getElementById("txtgl").value = dta["isi"][i][4];
        document.getElementById("txjkel").value = dta["isi"][i][3];
        document.getElementById("txjur").value = dta["isi"][i][2];
    }
    console.log(dta);
}