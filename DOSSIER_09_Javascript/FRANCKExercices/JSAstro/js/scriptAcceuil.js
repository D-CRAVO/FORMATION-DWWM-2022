
/**
 * Initialisation de l'objet litéral signes.
 */
const signes = {
    Verseau : "../img/Verseau.jpg"
    , Poisson : "../img/Poissons.jpg"
    , Bélier : "../img/Bélier.jpg"
    , Taureau : "../img/Taureau.jpg"
    , Gémeaux : "../img/Gémeaux.jpg"
    , Cancer : "../img/Cancer.jpg"
    , Lion : "../img/Lion.jpg"
    , Vierge : "../img/Vierge.jpg"
    , Balance : "../img/Balance.jpg"
    , Scorpion : "../img/Scorpion.jpg"
    , Sagittaire : "../img/Sagittaire.jpg"
    , Capricorne : "../img/Capricorne.jpg"
}


/**
 * Permet de récupérer la valeur d'une variable stockée dans un cookie.
 * 
 * @param {string} nom 
 * @returns 
 */
 function getCookie(nom){
    const cookieTab = document.cookie.split("; ");
    for(let i=0; i<cookieTab.length; i++){
        const cookieVal = cookieTab[i].split("=");
        if(cookieVal[0] == nom){
            return decodeURIComponent(cookieVal[1]);
        }
    }
}



/**
 * Renvoie le nombre de jours restants avant l'anniversaire de l'utilisateur.
 * 
 * @returns 
 */
 function nbJoursAnniv(){
    const birthDate = new Date(getCookie("birthDay"));
    const currentDate = new Date();
    let newBirthDate= new Date(
        currentDate.getFullYear()
        , birthDate.getMonth()
        , birthDate.getDate()
    );
    if(newBirthDate < currentDate){
        newBirthDate = new Date(
            currentDate.getFullYear() + 1
            , birthDate.getMonth()
            , birthDate.getDate()
        )
        return Math.floor((newBirthDate - currentDate)/86500000);
    }else if(newBirthDate > currentDate){
        return Math.ceil((newBirthDate - currentDate)/86500000);
    }
}


function background(signe){
    document.querySelector(".bodyAcceuil").setAttribute("style", `background-image: url(${signes[signe]}); background-repeat :no-repeat; background-size: cover`);
}
background(getCookie("signe"))

let nomUtilisateur = document.querySelector("#nomUtilisateur");
nomUtilisateur.innerText = getCookie('nomUtilisateur');

let prenomUtilisateur = document.querySelector("#prenomUtilisateur");
prenomUtilisateur.innerText = getCookie('prenomUtilisateur');

let birthDate = document.querySelector("#birthDate");
birthDate.innerText = getCookie('birthDay');

let birthDateLocaleString = document.querySelector("#birthDateLocaleString");
birthDateLocaleString.innerText = getCookie("birthDayLocale");

let signe = document.querySelector("#signe");
signe.innerText= getCookie("signe");

let pseudo = document.querySelector("#pseudo");
pseudo.innerText = getCookie('user');

let nbJoursAnniversaire = document.querySelector("#nbJoursAnniversaire");
nbJoursAnniversaire.innerText = nbJoursAnniv();