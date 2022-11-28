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
        newCell.innerText = data[i].id;
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
        cell.innerText = data[i].employee_name;
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
        cell.innerText = firstname.substring(0,1) + "." + tabFullName[1].toLowerCase() + "@email.com"
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
        cell.innerText = (data[i].employee_salary / 12).toFixed(2) + " €"
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
        cell.innerText = new Date().getFullYear() - data[i].employee_age;
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
    let tBody = document.querySelector("#tBody");
    let nbEmployees = tBody.querySelectorAll("tr").length;
    for(i=0; i<nbEmployees; i++){
        let tr = tBody.children[i];
        let monthlySalaryString = tr.querySelector(`td:nth-Child(4)`).innerHTML;
        monthlySalaryTab = monthlySalaryString.split(" ");
        monthlySalary = parseFloat(monthlySalaryTab[0]);
        totalSalary  += monthlySalary;
        document.querySelector("#totalSalary").textContent = totalSalary.toFixed(2) + " €"
    }
}


function buttonDuplicateDelete(){
    let tBody = document.querySelector("#tBody");
    let rowLength = tBody.querySelectorAll("tr").length;
    for(i=1; i<rowLength+1; i++){
        let row = document.querySelector(`#row${i}`);
        let cell = row.insertCell();
        cell.setAttribute("id", `cellButton${i}`)
        let input1 = document.createElement("button");
        //input1.setAttribute("type", "button");
        input1.setAttribute("class", "btn btn-primary");
        input1.setAttribute("onclick", "buttonDuplicate(this); createNbEmployees(); createTotalSalary()")
        input1.innerHTML = '<i class="fas fa-copy"></i> Duplicate'
        document.querySelector(`#cellButton${i}`).appendChild(input1);
        let input2 = document.createElement("button");
        //input2.setAttribute("type", "button");
        input2.setAttribute("class", "btn btn-danger");
        input2.setAttribute("onclick", "buttonDelete(this); createNbEmployees(); createTotalSalary()")
        input2.innerHTML = '<i class="fas fa-trash"></i> Delete'
        document.querySelector(`#cellButton${i}`).appendChild(input2);
    }
}

function buttonDelete(element){
    element.parentNode.parentNode.remove();
}

function buttonDuplicate(element){
    let row = element.parentNode.parentNode;
    const id = Number(row.parentNode.lastChild.firstChild.innerHTML)
    let copieRow = row.cloneNode(true);
    row.parentNode.appendChild(copieRow);
    copieRow.firstChild.innerHTML = id + 1;
}


// function buttonSort(){
//     let tBody = document.querySelector("#tBody");
//     let rowLength = tBody.childElementCount;
//     for(i=0; i<rowLength; i++){
//         let salaryString1 = tBody.children[i].children[3].innerText.split(" ");
//         let salary1 = Number(salaryString1[0]);
//         for(j=0; j<rowLength; i++){
//             let salaryString2 = tBody.children[i].children[3].innerText.split(" ");
//             let salary2 = Number(salaryString2[0]);
//             if(salary2>salary1){
//                 //tBody.append(tBody.children[j]);
//             }
//         }
//     }
// }

// function sortDesc(){
//     $(document).ready(function(){
//         $('#table').DataTable({
//             order:[[2, 'desc']]
//         });
//     });
// }


fetch("../json/employees.json")
.then(response =>{
    return response.json();
})
.then(data => {
    createEID(data);
    createFullName(data);
    createEmail(data);
    createMonthlySalary(data);
    // let promesse = createMonthlySalary(data);
    // promesse.then(console.log(createTotalSalary()));
    createYearOfBirth(data);
    createNbEmployees();
    buttonDuplicateDelete();
    createTotalSalary();
    buttonDelete(this);
    buttonDuplicate(this);
    sortDesc();
    
})
