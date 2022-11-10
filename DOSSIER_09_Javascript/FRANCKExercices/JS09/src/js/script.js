document.querySelector("#btnRouge").addEventListener("click", function(){
    document.querySelector("#inRouge").value = "ff";
    document.querySelector("#inVert").value = "00";
    document.querySelector("#inBleu").value = "00";
    colorierFond();
});

function colorierFond(){
    let chaine = '#'+ document.getElementById("inRouge").value + document.getElementById("inVert").value + document.getElementById("inBleu").value;
    console.log(chaine);
    document.getElementById("test").setAttribute("style", "background-color:" + chaine + ";");
}