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
 * 
 * @param {array} data 
 * @returns 
 */
function maxAttack(data){
    let valueMax = 0;
    let keyMax = 0;
    for(let i=0; i<data.length; i++){
        if(data[i].attack > valueMax){
            valueMax = data[i].attack;
            keyMax = i;
        }
    }
    console.log(data[keyMax]);
    return keyMax;
}


/**
 * 
 * @param {array} data 
 * @returns 
 */
function maxArmor(data){
    let valueMax = 0;
    let keyMax = 0;
    for(let i=0; i<data.length; i++){
        if(data[i].armor > valueMax){
            valueMax = data[i].armor;
            keyMax = i;
        }
    }
    console.log(data[keyMax]);
    return keyMax;
}



/**
 * Récupération du fichier json
 */
 let maxAttackData
fetch("https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json")
        .then(response => { 
            return response.json();
        })
        .then(jsondata => {
            jasonData = jsondata;
            creerBody(jsondata);
            creerTHead(jsondata);
            maxAttackData = maxAttack(jsondata);
            maxArmor(jsondata);
            // console.log(jsondata)
        });
        
