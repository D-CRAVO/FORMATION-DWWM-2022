// window.onload();

/**
 * Création du menu déroulant des jours.
 */
for(let i=1; i<=31; i++){
    let option = document.createElement("option");
    (i<10) ? option.innerText = `0${i}` : option.innerText = i;
    option.setAttribute('value', i);
    document.querySelector("#jourDeNaissance").appendChild(option);
}



/**
 * Création du menu déroulant des années.
 */
currentYear = new Date().getFullYear();
for(let i=currentYear; i>currentYear-80; i--){
    let option = document.createElement("option");
    option.setAttribute('value', i);
    option.innerText = i;
    document.querySelector("#anneeDeNaissance").appendChild(option);
}



/**
 * Renvoie la valeur numérique d'une chaine de caractères.
 * 
 * @param {string} maChaine 
 * @returns 
 */
function valNum(maChaine){
    maChaine = maChaine.toUpperCase();
    let somme = 0;
    for(let i=0; i<maChaine.length; i++){
        somme += maChaine.charCodeAt(i) - 64;
    }
    return somme;
}



/**
 * Renvoie le signe astrologique simplifié de l'utilisateur.
 * 
 * @param {string} moisDeNaissance 
 * @returns 
 */
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

signes=[
    "Verseau"
    ,"Poisson"
    ,"Belier"
    ,"Taureau"
    ,"Gémeaux"
    ,"Cancer"
    ,"Lion"
    ,"Vierge"
    ,"Balance"
    ,"Scorpion"
    ,"Sagittaire"
    ,"Capricorne"
]

/**
 * Renvoie la valeur numérique au format Date du mois 
 * qui va être utilisée dans la fonction recupererDate().
 * 
 * @param {string} mois 
 * @returns 
 */
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
// document.querySelector("#btnValider]").addEventListener("click", function(){
//     console.log(recupererMois("Décembre"));
//     console.log((document.querySelector("#moisDeNaissance").value));
//     console.log(recupererMois(document.querySelector("#moisDeNaissance").value));
// });


/**
 * Récupère les informations des inputs de la sélection de la date de naissance
 * et revoi une date au format Date
 * pour traitement au sein de la fonction nbJoursAnniv(date).
 * 
 * @returns 
 */
function recupererDate(){
    const date = new Date(
        document.querySelector("#anneeDeNaissance").value
        ,recupererMois(document.querySelector("#moisDeNaissance").value)
        ,document.querySelector("#jourDeNaissance").value
    );
    return date;
}



/**
 * Vérifie qu'un input de type Text n'est pas vide
 * Et que le champs Date de naissance a bien été sélectionné.
 * 
 * @param {HTHLElement} id 
 * @returns 
 */
function inputOK(id){
    const result = (document.querySelector(`${id}`).value != "" && document.querySelector(`${id}`).value != "--") ? true : false;
    return result;
}



/**
 * vérifie la validité du formulaire.
 * 
 * @returns 
 */
function formOK(){
    cond1 = inputOK("#nomUtilisateur");
    cond2 = inputOK("#prenomUtilisateur");  //console.log(`cond2 ${cond2}`);
    cond3 = inputOK("#jourDeNaissance");    //console.log(`cond3 ${cond3}`);
    cond4 = inputOK("#moisDeNaissance");
    cond5 = inputOK("#anneeDeNaissance");
    return (cond1 && cond2 && cond3 && cond4 && cond5) ? true : false;
}



// function formOK(){
//     var elements = document.querySelectorAll("input[type=text"]);
//     elements.forEach((item) => {item.addEventListener()}
// }



/** 
 * Ecoute le champs Pseudo du formulaire 
 * et si on se met dessus, déclenche la fonction formOK 
 * et si le résultat est true 
 * lance la création du pseudo via la fonction calculerPseudo
*/
document.querySelector("#pseudo").addEventListener("focus", function(){
    let control = formOK();
    if (control === true) {
        calculerPseudo();
    };
});



/**
 * Calcule le pseudo de l'utilisateur
 * et réactive le bouton Valider
 */
function calculerPseudo(){
    document.querySelector("#pseudo").value =
    calculerSigne(document.querySelector("#moisDeNaissance").value)
    + valNum(document.querySelector("#nomUtilisateur").value)
    + valNum(document.querySelector("#prenomUtilisateur").value);
    document.querySelector("#btnValider").removeAttribute("disabled");
}



/**
 * Valide le formulaire, crée un cookie et renvoie ver la page d'acceuil.
 */
document.querySelector("#btnValider").addEventListener("click", function(){
    setCookie("user", document.querySelector("#pseudo").value)
    setCookie("nomUtilisateur", document.querySelector("#nomUtilisateur").value);
    setCookie("prenomUtilisateur", document.querySelector("#prenomUtilisateur").value);
    setCookie("birthDay", recupererDate());
    //window.location.href = "../Acceuil.html";
});



/**
 * Crée un cookie
 * 
 * @param {string} nom 
 * @param {string} valeur 
 */
function setCookie(nom, valeur){
    valeur = encodeURIComponent(valeur)
    const cookie = `${nom}=${valeur}`
    + "; max-age=86400"
    + "; SameSite=Lax";
document.cookie = cookie;
console.log(document.cookie) ;
}



/**
 * Renvoie le nombre de jours restants avant l'anniversaire de l'utilisateur.
 * 
 * @param {Date} date 
 */
function nbJoursAnniv(date){
    const dateCourante = new Date();
    //console.log(dateCourante);
    let nbMois = dateCourante.getMonth() - date.getMonth();
    let nbJours = Math.abs(dateCourante.getDate() - date.getDate());
    let nbTotalJours = nbMois * 30 + nbJours;
    //console.log(nbMois, nbJours, nbTotalJours);
    return nbTotalJours;
}


/**
 * Lance le calcul du nombre de jours avant l'anniversaire de l'utilisateur.
 */
document.querySelector("#btnValider").addEventListener("click", function(){
    const dateAnniv = recupererDate();
    nbJoursAnniv(dateAnniv);
    //console.log(dateAnniv);
});



/**
 * Permet de récupérer la valeur d'une variable stockée dans un cookie.
 * 
 * @param {string} nom 
 * @returns 
 */
function getCookie(nom){
    const cookieTab = document.cookie.split(";");
    for(let i=0; i<cookieTab.length; i++){
        const cookieVal = cookieTab[i].split("=");
        if(cookieVal[0] == nom){
            //console.log("test3")
            //console.log(cookieVal);
            return decodeURIComponent(cookieVal[1]);
        }
    }
}
console.log(getCookie("user"));
console.log(getCookie("nomUtilisateur"));
console.log(getCookie("prenomUtilisateur"));

console.log(document.cookie);