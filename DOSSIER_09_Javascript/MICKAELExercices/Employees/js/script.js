/**
 * Intègre dans le tbody du tableau 
 * les identifiants des salariés.
 * 
 * @param {array} data 
 */
function createEID(data){
    let tBody = document.querySelector("#tBody")
    for(let i=0; i<data.length; i++){
        let newRow = tBody.insertRow();
        newRow.setAttribute("id", `row${i+1}`)
        let newCell = newRow.insertCell();
        newCell.textContent = data[i].id;
    }
}


/**
 * Intègre dans les rows créées dans createEID
 * les noms complets des employés.
 * 
 * @param {array} data 
 */
function createFullName(data){
    for(i=0; i<data.length; i++){
        let row = document.querySelector(`#row${i+1}`);
        let cell = row.insertCell();
        cell.textContent = data[i].employee_name;
    }
}

/**
 * Intègre dans les rows créées dans createEID
 * les email créés à partir des noms et prénoms des employés.
 * 
 * @param {array} data 
 */
function createEmail(data){
    for(i=0; i<data.length; i++){
        let row = document.querySelector(`#row${i+1}`);
        let cell = row.insertCell();
        let tabFullName = data[i].employee_name.split(" ");
        let firstname = tabFullName[0].toLowerCase()
        cell.textContent = firstname.substring(0,1) + "." + tabFullName[1].toLowerCase() + "@email.com"
    }
}


/**
 * Intègre dans les rows créées dans createEID
 * les salaires mensuels à partir du salaire annuel du fichier json.
 * 
 * @param {array} data 
 */
async function createMonthlySalary(data){
    for(i=0; i<data.length; i++){
        let row = document.querySelector(`#row${i+1}`);
        let cell = row.insertCell();
        cell.setAttribute("id", `cell${i}`);
        cell.textContent = (data[i].employee_salary / 12).toFixed(2) + " €"
    }
}


/**
 * Intègre dans les rows créées dans createEID
 * les années de naissance des employés
 * calculées à partir de leur âge.
 * 
 * @param {array} data 
 */
function createYearOfBirth(data){
    for(i=0; i<data.length; i++){
        let row = document.querySelector(`#row${i+1}`);
        let cell = row.insertCell();
        cell.textContent = new Date().getFullYear() - data[i].employee_age;
    }
}


/**
 * Détermine et intègre le nombre total d'employés
 */
function createNbEmployees(){
    let tBody = document.querySelector("tBody");
    document.querySelector("#nbEmployees").textContent = tBody.querySelectorAll("tr").length;
}


/**
 * Intègre le salaire total des employés
 * 
 * @param {array} data 
//  */
// function createTotalSalary(data){
//     let totalSalary = 0
//     for(i=0; i<data.length; i++){
//         totalSalary = totalSalary + (data[i].employee_salary / 12)
//     }
//     document.querySelector("#totalSalary").textContent = totalSalary.toFixed(2) + " €";
// }


function createTotalSalary(){
    let totalSalary = 0;
    let tBody = document.querySelector("tBody");
    let nbEmployees = tBody.querySelectorAll("tr").length;
    for(i=1; i<nbEmployees+1; i++){
        let monthlySalaryString = document.querySelector(`#cell${i}`).innerHTML;
        monthlySalaryTab = monthlySalaryString.split(" ");
        monthlySalary = parseFloat(monthlySalaryTab[0]);
        totalSalary  += monthlySalary;
        console.log(totalSalary);
    }
    return totalSalary;
    // document.querySelector("#totalSalary").textContent = totalSalary + " €"
}


function buttonDuplicateDelete(){
    let tBody = document.querySelector("#tBody");
    let rowLength = tBody.querySelectorAll("tr").length;
    for(i=1; i<rowLength+1; i++){
        let row = document.querySelector(`#row${i}`);
        let cell = row.insertCell();
        cell.setAttribute("id", `cellButton${i}`)
        let input1 = document.createElement("input");
        input1.setAttribute("type", "button");
        input1.setAttribute("value", "Duplicate");
        document.querySelector(`#cellButton${i}`).appendChild(input1);
        // icon1 = document.createElement("i");
        // icon1.setAttribute("class", "fa-solid fa-trash");
        // document.querySelector(`#cellButton${i}`).appendChild(icon1);
        let input2 = document.createElement("input");
        input2.setAttribute("type", "button");
        input2.setAttribute("value", "Delete");
        document.querySelector(`#cellButton${i}`).appendChild(input2);
    }
}

function buttonDelete(element){
    console.log(document.querySelector(element));
    // let elementToDelete = document.querySelector(element);
    // elementToDelete.parentNode.removeChild(element);
}
buttonDelete();

fetch("../json/employees.json")
.then(response =>{
    return response.json();
})
.then(data => {
    console.log(data)
    createEID(data);
    createFullName(data);
    createEmail(data);
    createMonthlySalary(data);
    // let promesse = createMonthlySalary(data);
    // promesse.then(console.log(createTotalSalary()));
    createYearOfBirth(data);
    createNbEmployees();
    buttonDuplicateDelete();
})
// .then(totalSalary => {
//     totalSalary = createTotalSalary();
//     document.querySelector("#totalSalary").textContent = totalSalary + " €"
// }
//     // let totalSalary = createTotalSalary();
//     // document.querySelector("#totalSalary").textContent = totalSalary + " €"
// )
