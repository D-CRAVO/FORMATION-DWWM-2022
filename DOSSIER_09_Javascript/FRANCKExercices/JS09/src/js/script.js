// document.querySelector("#btnRouge").addEventListener("click", function(){
//     document.querySelector("#inRouge").value = "ff";
//     document.querySelector("#inVert").value = "00";
//     document.querySelector("#inBleu").value = "00";
//     colorierFond();
// });

// function colorierFond(){
//     let chaine = '#'+ document.getElementById("inRouge").value + document.getElementById("inVert").value + document.getElementById("inBleu").value;
//     console.log(chaine);
//     document.getElementById("test").setAttribute("style", "background-color:" + chaine + ";");
// }

document.querySelector("#btnRouge").addEventListener("click", function(){
    document.querySelector("#inRouge").value = "ff";
    document.querySelector("#inVert").value = "00";
    document.querySelector("#inBleu").value = "00";
    colorierFond();
});

document.querySelector("#btnVert").addEventListener("click", function(){
    document.querySelector("#inRouge").value = "00";
    document.querySelector("#inVert").value = "ff";
    document.querySelector("#inBleu").value = "00";
    colorierFond();
});

document.querySelector("#btnBleu").addEventListener("click", function(){
    document.querySelector("#inRouge").value = "00";
    document.querySelector("#inVert").value = "00";
    document.querySelector("#inBleu").value = "ff";
    colorierFond();
});

document.querySelector("#btnHex").addEventListener("click", function(){
    rouge = document.querySelector("#inRouge").value;
    vert = document.querySelector("#inVert").value ;
    bleu = document.querySelector("#inBleu").value;
    colorierFondHex(rouge, vert, bleu);
} );

document.querySelector("#btnRgb").addEventListener("click", function(){
    rouge = document.querySelector("#inRouge").value;
    vert = document.querySelector("#inVert").value ;
    bleu = document.querySelector("#inBleu").value;
    colorierFondRgb(rouge, vert, bleu);
});

console.log(document.querySelectorAll("input[type=text]"))

document.querySelectorAll("input[type=text]").addEventListener("blur", function(){
    rouge = document.querySelector("#inRouge").value;
    vert = document.querySelector("#inVert").value;
    bleu = document.querySelector("#inBleu").value;
    colorierFondRgb(rouge, vert, bleu);
});

function colorierFond(){
    let chaine = '#'+ document.getElementById("inRouge").value + document.getElementById("inVert").value + document.getElementById("inBleu").value;
    console.log(chaine);
    document.getElementById("body").setAttribute("style", "background-color:" + chaine + ";");
}

function colorierFondHex(rouge, vert, bleu){
    let chaine = '#'+ rouge + vert + bleu;
    console.log(chaine);
    document.getElementById("body").setAttribute("style", "background-color:" + chaine + ";");
}

function colorierFondRgb(rouge, vert, bleu){
    document.querySelector("body").setAttribute("style", `background-color: rgb(${rouge}, ${vert}, ${bleu})`);
}