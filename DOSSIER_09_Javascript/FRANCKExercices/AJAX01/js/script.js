/**
 * Initialisation à vide du tableau
 */
let arrayCardgame = [];


var tab = document.querySelector("#tableau");

function creerBody(data){
    // var tab = document.querySelector("#tableau");
    let tBody = tab.createTBody();
    console.log(data.length);
    for (let i=0; i<data.length; i++){
        let newRow = tBody.insertRow(i);
        for (const key in data[i]) {
            let newCell = newRow.insertCell();
            newCell.textContent = data[i][key];
        }
    }
}

function creerTHead(data){
    //var tab = document.querySelector("#tableau");
    let tHead = tab.createTHead();
    let newRow = tHead.insertRow();
    for (const key in data[0]){
        // let newCell = newRow.insertCell();
        let newCell = newRow.createElement(`th`);
        newCell.textContent = key
    }
}

/**
 * Récupération du fichier json
 */
var tabData = [];
fetch("https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json")
        .then(response => { 
            return response.json();
        })
        .then(jsondata => {
            creerBody(jsondata);
            creerTHead(jsondata);
        });
        // .then(jsondata => {
        //     for (elements of jsondata){
        //         arrayCardgame.push(elements);
        //     }
            // for (let i=0; i<jsondata.length; i++){
            //     arrayCardgame.push(jsondata[i])
            // }

        //});

        //console.log(arrayCardgame);


console.log("test0")

// iterator = arrayCardgame.values();
// console.log(iterator)
// for (const value of iterator){
//     console.log("test1")
//     console.log(value);
// }

// iterator1 = arrayCardgame.entries();
// console.log(iterator1.next().value)


console.log(arrayCardgame[1])

// for (let i=0; i<arrayCardgame.length; i++){
//     console.log(arrayCardgame[i]);
//     console.log("test2")
//     for (items of arrayCardgame[i]){
//         console.log(items);
//         console.log("test3");
//     }
// }

console.log(arrayCardgame);


