let qs = window.location.search;
let urlp = new URLSearchParams(qs);
let carikode = urlp.get("kode");

let urltarget = new URL("http://localhost/UASPEMWEB/webproK/server/dtmkkode.php");
urltarget.searchParams.set("kode",carikode);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkode").value = dta["isi"][i][0];
        document.getElementById("txmatkul").value = dta["isi"][i][1];
        document.getElementById("txdosen").value = dta["isi"][i][2];   
    }
    console.log(dta);
}