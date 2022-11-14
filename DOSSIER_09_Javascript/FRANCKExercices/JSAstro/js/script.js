


// window.onload();

function valNum(maChaine){
    maChaine = maChaine.toUpperCase();
    let somme = 0;
    for(let i=0; i<maChaine.length; i++){
        somme += maChaine.charCodeAt(i) - 64;
    }
    return somme;
}

essai = "essai"
valNum(essai);

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

console.log(calculerSigne("Novembre"));

function formOK(id){
    document.querySelectorAll(input[type="text"]);
    console.log(essaiInput);
}

function calculerPseudo(){
    document.querySelector("input[type = submit]").removeAttribute("disabled");
    return calculerSigne(document.querySelector("#moisDeNaissance").value)
    + valNum(document.querySelector("#nomUtilisateur").value)
    + valNum(document.querySelector("#prenomUtilisateur").value);
}

console.log(calculerPseudo());