// window.onload();

function valNum(maChaine){
    maChaine = maChaine.toUpperCase();
    let somme = 0;
    for(let i=0; i<maChaine.length; i++){
        somme += maChaine.charCodeAt(i) - 64;
    }
    return somme;
}
// essai = "essai"
// valNum(essai);

function calculerSigne(moisDeNaissance){
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
    //console.log(date);
    return date;
}
recupererDate();

function inputOK(id){
    const result = (document.querySelector(`${id}`).value != "" && document.querySelector(`${id}`).value != "--") ? true : false;
    return result;
}
// console.log(inputOK("#prenomUtilisateur"));

function formOK(){
    cond1 = inputOK("#nomUtilisateur");
    cond2 = inputOK("#prenomUtilisateur");
    if(cond1 && cond2){
        result = true;
    }else{
        result = false;
    }
    return result;
}
console.log(formOK());

function calculerPseudo(){
    document.querySelector("#pseudo").value =
    calculerSigne(document.querySelector("#moisDeNaissance").value)
    + valNum(document.querySelector("#nomUtilisateur").value)
    + valNum(document.querySelector("#prenomUtilisateur").value);
    document.querySelector("input[type=submit]").removeAttribute("disabled");
}
calculerPseudo();

document.querySelector("input[type=submit]").addEventListener("click", function(){
    const cookie = "user=" + document.querySelector("#pseudo").value
            + "; nomUtilisateur=" + document.querySelector("#nomUtilisateur").value
            + "; prenomUtilisateur=" + document.querySelector("#prenomUtilisateur").value
            + "; date=" + recupererDate()
            + `; SameSite=Lax`;
    document.cookie = cookie;
    console.log(document.cookie) ;
    window.location.href = "../Acceuil.html";
})