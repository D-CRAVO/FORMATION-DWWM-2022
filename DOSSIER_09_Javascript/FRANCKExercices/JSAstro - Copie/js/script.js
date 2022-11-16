// window.onload();


// Création du menu déroulant des années.


for(let i=2022; i>1899; i--){
    let option = document.createElement("option");
    option.setAttribute('value', i);
    option.innerText = i;
    document.querySelector("#anneeDeNaissance").appendChild(option);
}


// Renvoie la valeur numérique d'une chaine de caractères.


function valNum(maChaine){
    maChaine = maChaine.toUpperCase();
    let somme = 0;
    for(let i=0; i<maChaine.length; i++){
        somme += maChaine.charCodeAt(i) - 64;
    }
    return somme;
}
//console.log(valNum("essai"))



// Renvoie le signe astrologique simplifié de l'utilisateur.


function calculerSigne(moisDeNaissance){
    let result;
    switch(moisDeNaissance){
        case "Janvier" :
            result = "Verseau";
            break;
        case "Fevrier" :
            result = "Poisson";
            break;
        case "Mars" :
            result = "Belier";
            break;
        case "Avril" :
            result = "Taureau";
            break;
        case "Mai" :
            result = "Gémeaux";
            break;
        case "Juin" :
            result = "Cancer";
            break;
        case "Juillet" :
            result = "Lion";
            break;
        case "Aout" :
            result = "Vierge";
            break;
        case "Septembre" :
            result = "Balance";
            break;
        case "Octobre" :
            result = "Scorpion";
            break;
        case "Novembre" :
            result = "Sagittaire";
            break;
        case "Decembre" :
            result = "Capricorne";
            break;
    }
    return result;
}
// console.log(calculerSigne("Novembre"));

function recupererMois(mois){
    let result;
    switch(mois){
        case "Janvier" :
            result = 0; 
            break;
        case "Février" :
            result = 1;
            break;
        case "Mars" :
            result = 2;
            break;
        case "Avril" :
            result = 3;
            break;
        case "Mai" :
            result = 4;
            break;
        case "Juin" :
            result = 5;
            break;
        case "Juillet" :
            result = 6;
            break;
        case "Août" :
            result = 7;
            break;
        case "Septembre" :
            result = 8;
            break;
        case "Octobre" :
            result = 9;
            break;
        case "Novembre" :
            result = 10;
            break;
        case "Décembre" :
            result = 11;
            break;
    }
    return result;
}

function recupererDate(){
    const date = new Date(
        document.querySelector("#anneeDeNaissance").value
        ,recupererMois(document.querySelector("#moisDeNaissance").value)
        ,document.querySelector("#jourDeNaissance").value
    );
    return date;
}
const date = recupererDate();



// vérifie la validité du formulaire.


function inputOK(id){
    const result = (document.querySelector(`${id}`).value != "" && document.querySelector(`${id}`).value != "--") ? true : false;
    return result;
}
// console.log(inputOK("#prenomUtilisateur"));

function formOK(){
    cond1 = inputOK("#nomUtilisateur");
    cond2 = inputOK("#prenomUtilisateur");  console.log(`cond2 ${cond2}`);
    cond3 = inputOK("#jourDeNaissance");    console.log(`cond3 ${cond3}`);
    cond4 = inputOK("#moisDeNaissance");
    cond5 = inputOK("#anneeDeNaissance");
    return (cond1 && cond2 && cond3 && cond4 && cond5) ? true : false;
}
console.log(formOK());

// document.querySelector(".form").addEventListener("change", function(){
//     let control = formOK();
//     if (control === true) {
//         calculerPseudo();
//         console.log("test1");
//     };
//     console.log("test2");
// });

document.querySelector("#pseudo").addEventListener("click", function(){
    let control = formOK();
    if (control === true) {
        calculerPseudo();
        console.log("test1");
    };
    console.log("test2");
});



// Calcule le pseudo de l'utilisateur


function calculerPseudo(){
    document.querySelector("#pseudo").value =
    calculerSigne(document.querySelector("#moisDeNaissance").value)
    + valNum(document.querySelector("#nomUtilisateur").value)
    + valNum(document.querySelector("#prenomUtilisateur").value);
    document.querySelector("input[type=submit]").removeAttribute("disabled");
}
// calculerPseudo();



// Valide le formulaire, crée un cookie et renvoie ver la page d'acceuil.


document.querySelector("input[type=submit]").addEventListener("click", valider);

// encodeURIComponent
function valider(){
    const cookie = "user=" + document.querySelector("#pseudo").value
            + "; nomUtilisateur=" + document.querySelector("#nomUtilisateur").value
            + "; prenomUtilisateur=" + document.querySelector("#prenomUtilisateur").value
            + "; date=" + recupererDate() 
            + "; max-age=86400"
            + "; SameSite=Lax";
    document.cookie = cookie;
    console.log(document.cookie) ;
    window.location.href = "../Acceuil.html";
}

// document.querySelector("input[type=submit]").addEventListener("click", function(){
//     const cookie = "user=" + document.querySelector("#pseudo").value
//             + "; nomUtilisateur=" + document.querySelector("#nomUtilisateur").value
//             + "; prenomUtilisateur=" + document.querySelector("#prenomUtilisateur").value
//             + "; date=" + recupererDate() 
//             + "; SameSite=Lax";
//     document.cookie = cookie;
//     console.log(document.cookie) ;
//     window.location.href = "../Acceuil.html";
// })


// Renvoie le nombre de jours restants avant l'anniversaire de l'utilisateur

function nbJoursAnniv(date){
    //const dateAnniv = recupererDate();
    
    const dateCourante = new Date();
    console.log(dateCourante);
    let nbMois = dateCourante.getMonth() - date.getMonth();
    let nbJours = Math.abs(dateCourante.getDate() - date.getDate());
    let nbTotalJours = nbMois * 30 + nbJours;
    console.log(nbMois, nbJours, nbTotalJours);
}
const dateAnniv = new Date(1975, 03, 26)
console.log(dateAnniv);
nbJoursAnniv(dateAnniv);


// Permet de récupérer la valeur d'une variable stockée dans un cookie.

function getCookie(){
    const cookieTab = document.cookie.split(";");
    for(let i=0; i<cookieTab.length; i++){
        const cookieVal = cookieTab[i].split("=");
        console.log(cookieVal);
    }
}
getCookie();

console.log(document.cookie);