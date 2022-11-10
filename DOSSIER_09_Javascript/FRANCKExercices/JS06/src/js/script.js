/* let qte01 = parseInt(document.getElementById('#qte01'));
//qte01.addEventListener("keypress", prix())
console.log(qte01);
let unitaire01 = document.querySelector('#unitaire01');
console.log(typeof(unitaire01)); */


function verifnombre(_idchampstext){
    let verif=false;
    let champtext=document.getElementById(_idchampstext).value;
    if(champtext!="" && !isNaN(champtext)==true){
        verif = true
    } else {
        //alert("Veuillez rentrer un nombre !");
        document.getElementById(_idchampstext).value="";
        document.getElementById(_idchampstext).focus();
    }
    return verif;
}

function calculCA(_idchamps){

    let verif = verifnombre(_idchamps);

    if (verif == true) {
        let ca1 = Number(document.querySelector("#pu1").value) * Number(document.querySelector("#qte01").value);
        document.querySelector("#prix01").value = ca1;

        // let unitaire02 = Number(document.querySelector("#unitaire02").value);
        // console.log(unitaire02);
        // let qte02 = Number(document.querySelector("#qte02").value);
        // console.log(qte02);
        // let ca2 = unitaire02 * qte02;
        // console.log(ca2);

        let ca2 = Number(document.querySelector("#unitaire02").value) * Number(document.querySelector("#qte02").value);
        console.log(ca2);
        document.querySelector("#prix02").value = ca2;

        // document.querySelector("#prix02").value = document.querySelector("#qte02").value * document.querySelector("#unitaire02").value;

        // document.querySelector("#prixTotal") = ca1 + document.querySelector("#prix02").value;

        document.querySelector("#prixTotal").value = ca1 + ca2;
    }else{
        console.log("Veuillez saisir un nombre !");
    }
    
}


let monbouton = document.querySelector("#pu1");
monbouton.addEventListener("blur", function () {
    calculCA("pu1");
});



