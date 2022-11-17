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
            //console.log("test3")
            //console.log(cookieVal);
            return decodeURIComponent(cookieVal[1]);
        }
    }
}



/**
 * Renvoie le nombre de jours restants avant l'anniversaire de l'utilisateur.
 * 
 * @param {Date} date 
 */
 function nbJoursAnniv(){
    const birthDate = new Date(getCookie("birthDay"));
    console.log(birthDate);
    const dateCourante = new Date();
    console.log(dateCourante);
    
    console.log(dateCourante - birthDate + (birthDate.getFullYear()))
    // let nbMois = dateCourante.getMonth() - birthDate.getMonth();
    // let nbJours = Math.abs(dateCourante.getDate() - birthDate.getDate());
    // let nbTotalJours = nbMois * 30 + nbJours;
    // //console.log(nbMois, nbJours, nbTotalJours);
    // return nbTotalJours;
}
console.log(nbJoursAnniv());

//console.log(getCookie('nomUtilisateur'));
//console.log(getCookie('birthDay'));

nomUtilisateur = document.querySelector("#nomUtilisateur");
nomUtilisateur.innerText = getCookie('nomUtilisateur');

prenomUtilisateur = document.querySelector("#prenomUtilisateur");
prenomUtilisateur.innerText = getCookie('prenomUtilisateur');

birthDate = document.querySelector("#birthDate");
birthDate.innerText = getCookie('birthDay');

pseudo = document.querySelector("#pseudo");
pseudo.innerText = getCookie('user');