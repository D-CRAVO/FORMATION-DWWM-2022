/**
 * Création d'une constante Tab
 */
const tab = document.querySelector("#table");


/**
 * Création du tableau contenant les données exploitables 
 * du fichier json
 * 
 * @param {array} data 
 */
function creerBody(data){
    let tBody = tab.createTBody();
    for (let i=0; i<data.length; i++){
        let newRow = tBody.insertRow(i);
        for (const key in data[i]) {
            let newCell = newRow.insertCell();
            newCell.textContent = data[i][key];
        }
    }
}


/**
 * Création des en-têtes du tableau avec les index
 * du fichier json
 * 
 * @param {Array} data 
 */
function creerTHead(data){
    let tHead = tab.createTHead();
    let newRow = tHead.insertRow();
    newRow.setAttribute("id", "newRow");
    for (const key in data[0]){
        let newCell = document.createElement("th");
        newCell.textContent = key;
        document.querySelector("#newRow").appendChild(newCell);
    }
}


/**
 * Calcul permettant de déterminer
 * quelle est la carte avec le plus de points d'attaque
 * 
 * @param {array} data 
 */
function maxAttack(data){
    let valueMax = data[0].attack;
    let keyMax = 0;
    for(let i=1; i<data.length; i++){
        if(data[i].attack > valueMax){
            valueMax = data[i].attack;
            keyMax = i;
        }
    }
    console.log("maxAttack")
    console.log(data[keyMax]);
    return keyMax;
}



/**
 * 
 * @param {array} data 
 * @returns 
 */
function maxArmor(data){
    let valueMax = data[0].armor;
    let maxKey = 0;
    for(i=1; i<data.length; i++){
        if(data[i].armor>valueMax){
            valueMax = data[i].armor;
            maxKey = i
        }
    }
    console.log("maxArmor");
    console.log(data[maxKey]);
    return maxKey;
}


/**
 * 
 * @param {array} data 
 * @returns 
 */
function maxPlayed(data){
    let valueMax = data[0].played;
    let maxKey = 0;
    for(i=1; i<data.length; i++){
        if(data[i].played>valueMax){
            valueMax = data[i].played;
            maxKey = i
        }
    }
    console.log("maxPlayed");
    console.log(data[maxKey]);
    return maxKey;
}


/**
 * 
 * @param {array} data 
 * @returns 
 */
function maxVictories(data){
    let valueMax = data[0].victory;
    let maxKey = 0;
    for(i=1; i<data.length; i++){
        if(data[i].victory>valueMax){
            valueMax = data[i].victory;
            maxKey = i
        }
    }
    console.log("maxPlayed");
    console.log(data[maxKey]);
    return maxKey;
}


/**
 * Calcul permettant de déterminer
 * quelle est la carte avec le plus de points d'armure
 * 
 * @param {array} data 
 * @param {string} attribute 
 * @returns 
 */
function maxAttribute(data, attribute){
    let valueMax = data[0][attribute];
    console.log(valueMax);
    let keyMax = 0;
    for(let i=1; i<data.length; i++){
        if(data[i].attribute > valueMax){
            valueMax = data[i][attribute];
            keyMax = i;
        }
    }
    console.log(data[keyMax]);
    return keyMax;
}

/**
 * Intègre les informations attaque max à la carte d'affichage.
 * 
 * @param {Object} data 
 * @param {integer} maxKey 
 */
function showMaxAttack(data, maxKey){
    document.querySelector("#attackId").innerText = data[maxKey].id;
    document.querySelector("#attackName").innerText = data[maxKey].name;
    document.querySelector("#attackPlayedValue").innerText = data[maxKey].played;
    document.querySelector("#attackVictoriesValue").innerText = data[maxKey].victory;
    document.querySelector("#attackPowerValue").innerText = data[maxKey].power;
    document.querySelector("#attackAttackValue").innerText = data[maxKey].attack;
    document.querySelector("#attackArmorValue").innerText = data[maxKey].armor;
}

/**
 * Intègre les informations armure max à la carte d'affichage.
 * 
 * @param {array} data 
 * @param {integer} maxKey 
 */
function showMaxArmor(data, maxKey){
    document.querySelector("#armorId").innerText = data[maxKey].id;
    document.querySelector("#armorName").innerText = data[maxKey].name;
    document.querySelector("#armorPlayedValue").innerText = data[maxKey].played;
    document.querySelector("#armorVictoriesValue").innerText = data[maxKey].victory;
    document.querySelector("#armorPowerValue").innerText = data[maxKey].power;
    document.querySelector("#armorAttackValue").innerText = data[maxKey].attack;
    document.querySelector("#armorArmorValue").innerText = data[maxKey].armor;
}


/**
 * Intègre les informations played max à la carte d'affichage.
 * 
 * @param {array} data 
 * @param {integer} maxKey 
 */
//  function showMaxPlayed(data, maxKey){
//     document.querySelector("#playedId").innerText = data[maxKey].id;
//     document.querySelector("#playedName").innerText = data[maxKey].name;
//     document.querySelector("#playedPlayedValue").innerText = data[maxKey].played;
//     document.querySelector("#playedVictoriesValue").innerText = data[maxKey].victory;
//     document.querySelector("#playedPowerValue").innerText = data[maxKey].power;
//     document.querySelector("#playedAttackValue").innerText = data[maxKey].attack;
//     document.querySelector("#playedArmorValue").innerText = data[maxKey].armor;
// }


/**
 * Intègre les informations vitories max à la carte d'affichage.
 * 
 * @param {array} data 
 * @param {integer} maxKey 
 */
//  function showMaxPlayed(data, maxKey){
//     document.querySelector("#victoriesId").innerText = data[maxKey].id;
//     document.querySelector("#victoriesName").innerText = data[maxKey].name;
//     document.querySelector("#victoriesPlayedValue").innerText = data[maxKey].played;
//     document.querySelector("#victoriesVictoriesValue").innerText = data[maxKey].victory;
//     document.querySelector("#victoriesPowerValue").innerText = data[maxKey].power;
//     document.querySelector("#victoriesAttackValue").innerText = data[maxKey].attack;
//     document.querySelector("#victoriesArmorValue").innerText = data[maxKey].armor;
// }


/**
 * Récupération du fichier json
 */
let maxAttackKey, maxArmorKey, maxPlayedKey, maxVictoriesKey;
// fetch("https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json")
// .then(response => { 
//     return response.json();
// })
// .then(jsondata => {
//     creerBody(jsondata);
//     creerTHead(jsondata);
//     maxAttackKey = maxAttack(jsondata);
//     showMaxAttack(jsondata, maxAttackKey);
//     maxArmorKey = maxArmor(jsondata);
//     showMaxArmor(jsondata, maxArmorKey);
//     maxAttribute(jsondata, "armor");
//     console.log(jsondata);
// });
        
var data = [];
let monXhr = new XMLHttpRequest();
// création de l'objet xhr
monXhr.open("GET", "https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json", true );
// Enonciation de la requête
monXhr.responseType = "json"
// format de la réponse
monXhr.send();
monXhr.onload = function(){
    if(monXhr.status != 200){
        console.log("erreur : " + monXhr.status + " Description erreur : " + monXhr.statusText);
    }else{
        data = monXhr.response;
        //console.log(data);
        creerBody(data);
        creerTHead(data);
        maxAttackKey = maxAttack(data);
        showMaxAttack(data, maxAttackKey);
        maxArmorKey = maxArmor(data);
        showMaxArmor(data, maxArmorKey);
        maxPlayedKey = maxPlayed(data);
        //showMaxPlayed(data, maxPlayedKey);
        maxVictoriesKey = maxVictories(data);
        //showMaxVictories(data, maxVictoriesKey);
        maxAttribute(data, "armor");

    }
}


