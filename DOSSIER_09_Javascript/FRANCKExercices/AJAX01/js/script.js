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
    console.log(data[keyMax]);
    return keyMax;
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
    let valueMax = data[0].attribute;
    let keyMax = 0;
    for(let i=1; i<data.length; i++){
        if(data[i].attribute > valueMax){
            valueMax = data[i].attribute;
            keyMax = i;
        }
    }
    console.log(data[keyMax]);
    return keyMax;
}

/**
 * Intègre les informations à la carte d'affichage.
 * 
 * @param {Object} data 
 * @param {integer} maxAttackKey 
 */
function showMaxAttack(data, maxAttackKey){
    document.querySelector("#attackId").innerText = data[maxAttackKey].id;;
    document.querySelector("#attackName").innerText = data[maxAttackKey].name;
    document.querySelector("#attackPlayedValue").innerText = data[maxAttackKey].played;
    document.querySelector("#attackVictoriesValue").innerText = data[maxAttackKey].victory;
    document.querySelector("#attackPowerValue").innerText = data[maxAttackKey].power;
    document.querySelector("#attackAttackValue").innerText = data[maxAttackKey].attack;
    document.querySelector("#attackArmorValue").innerText = data[maxAttackKey].armor;
}

/**
 * Récupération du fichier json
 */
let maxAttackKey;
fetch("https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json")
        .then(response => { 
            return response.json();
        })
        .then(jsondata => {
            creerBody(jsondata);
            creerTHead(jsondata);
            maxAttackKey = maxAttack(jsondata);
            showMaxAttack(jsondata, maxAttackKey)
            maxAttribute(jsondata, armor);
            // console.log(jsondata)
        });
        
