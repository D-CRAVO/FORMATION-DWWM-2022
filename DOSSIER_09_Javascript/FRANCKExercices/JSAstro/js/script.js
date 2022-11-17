// window.onload();



/**
 * Initialisation du tableau d'objets signes.
 * objet litéral
 */
const signes = {
    Janvier : "Verseau"
    ,Février : "Poisson"
    ,Mars : "Belier"
    ,Avril : "Taureau"
    ,Mai : "Gémeaux"
    ,Juin : "Cancer"
    ,Juillet : "Lion"
    ,Août : "Vierge"
    ,Septembre : "Balance"
    ,Octobre : "Scorpion"
    ,Novembre : "Sagittaire"
    ,Décembre : "Capricorne"
}



/**
 * Initialisation du tableau de valeurs mois.
 * tableau indicé
 */
const mois = [
    "Janvier"
    ,"Février"
    ,"Mars"
    ,"Avril"
    ,"Mai"
    ,"Juin"
    ,"Juillet"
    ,"Août"
    ,"Septembre"
    ,"Octobre"
    ,"Novembre"
    ,"Décembre"
]



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
 * Création du menu déroulant des mois.
 */
for(let i of mois){
    let option = document.createElement("option");
    option.setAttribute("value", i);
    option.innerText = i;
    document.querySelector("#moisDeNaissance").appendChild(option);
}



/**
 * Création du menu déroulant des années.
 */
currentYear = new Date().getFullYear();
for(let i=currentYear; i>currentYear-100; i--){
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
 * @returns 
 */
function calculerSigne(){
    return signes[document.querySelector("#moisDeNaissance").value]
}



/**
 * Récupère les informations des inputs de la sélection de la date de naissance
 * et revoi une date au format Date
 * pour traitement au sein de la fonction nbJoursAnniv(date).
 * 
 * @returns 
 */
function recupererDate(){
    let monMois = mois.indexOf(document.querySelector("#moisDeNaissance").value)+1 
    monMois= (monMois <10) ?  "0" + monMois : monMois;
    let monJour = document.querySelector("#jourDeNaissance").value;
    monJour = (monJour <10) ? "0" + monJour : monJour;
    let madate = MonJour + "/" 
                + monMois+ "/"
                + document.querySelector("#anneeDeNaissance").value;
    console.log(madate);
    return madate;
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
  
    let verifBool = (cond1 && cond2 && cond3 && cond4 && cond5) ? true :  false;
    if (verifBool == false){
        console.log("Veuillez remplir tous les champs");
    }
    return verifBool;
}



// function formOK2(){
//     let elementsInput = document.querySelectorAll("input[type=text]");
//     let condInput = elementsInput.forEach((itemInput) => {itemInput.addEventListener("focus", function(){
//         (document.querySelector(`${id}`).value != "") ? true : false;
//     })})
//     let elementsSelect = document.querySelectorAll("select");
//     let condSelect = elementsSelect.forEach((itemSelect) => {itemSelect.addEventListener("focus", function(){
//         (document.querySelector(`${id}`).value != "--") ? true : false;
//     })})
//     (condInput && condSelect) ? true : false;
// };
// console.log(formOK2());

/**
 * Calcule le pseudo de l'utilisateur
 * et réactive le bouton Valider
 */
function calculerPseudo(){

    if (formOK()){
        document.querySelector("#pseudo").value =
        calculerSigne(document.querySelector("#moisDeNaissance").value)
        + valNum(document.querySelector("#nomUtilisateur").value)
        + valNum(document.querySelector("#prenomUtilisateur").value);
        document.querySelector("#btnValider").disabled = false;
    }
    
}



/**
 * Crée un cookie
 * 
 * @param {string} nom 
 * @param {string} valeur 
 */
function setCookie(nom, valeur){
    let maDate = new Date();
    let dateExpire = new Date(maDate.getFullYear(), maDate.getMonth(), maDate.getDate(), maDate.getHours()+2, maDate.getMinutes(), maDate.getSeconds())
    console.log(maDate.getHours()+1)
    console.log(dateExpire.toGMTString());
    valeur = encodeURIComponent(valeur)
    const cookie = `${nom}=${valeur}`
    + "; expires=" + dateExpire.toGMTString()
    + "; SameSite=Strict"; 
document.cookie = cookie;
//console.log(document.cookie) ;
}



/**
 * Renvoie le nombre de jours restants avant l'anniversaire de l'utilisateur.
 * 
 * @param {Date} date 
 */
// function nbJoursAnniv(date){
//     const dateCourante = new Date();
//     //console.log(dateCourante);
//     let nbMois = dateCourante.getMonth() - date.getMonth();
//     let nbJours = Math.abs(dateCourante.getDate() - date.getDate());
//     let nbTotalJours = nbMois * 30 + nbJours;
//     //console.log(nbMois, nbJours, nbTotalJours);
//     return nbTotalJours;
// }







/** 
 * Ecoute le champs Pseudo du formulaire 
 * et si on se met dessus, déclenche la fonction formOK 
 * et si le résultat est true 
 * lance la création du pseudo via la fonction calculerPseudo
*/
// document.querySelector("#pseudo").addEventListener("focus", function(){
//     let control = formOK();
//     if (control === true) {
//         calculerPseudo();
//     };
// });

var elements = document.querySelectorAll(".form");
elements.forEach((item) => {item.addEventListener("blur", function(){
    calculerPseudo();})});

 var elements2 = document.querySelectorAll(".form2");
 elements2.forEach((item) => item.addEventListener("change", calculerPseudo) );



/**
 * Ecoute le bouton Valider
 * récupère la date de naissance 
 * valide le formulaire
 * crée un cookie 
 * renvoie ver la page d'acceuil.
 */
 document.querySelector("#btnValider").addEventListener("click", function(){
    //const dateAnniv = recupererDate();
    //nbJoursAnniv(dateAnniv);
    setCookie("user", document.querySelector("#pseudo").value)
    setCookie("nomUtilisateur", document.querySelector("#nomUtilisateur").value);
    setCookie("prenomUtilisateur", document.querySelector("#prenomUtilisateur").value);
    setCookie("birthDay", recupererDate());
    //window.location.href = "../Acceuil.html";
});