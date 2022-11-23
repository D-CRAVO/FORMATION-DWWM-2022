function createEID(data){
    let tBody = document.querySelector("#tBody")
    console.log(data[0].id)
    console.log(data)
    for(let i=0; i<data.length; i++){
        let newRow = tBody.insertRow();
        newRow.setAttribute("id", `row${i+1}`)
        let newCell = newRow.insertCell();
        newCell.textContent = data[i].id;
    }
}

function createFullName(data){
    for(i=0; i<data.length; i++){
        let row = document.querySelector(`#row${i+1}`);
        let cell = row.insertCell();
        cell.textContent = data[i].employee_name;
    }
}








fetch("../json/employees.json")
.then(response =>{
    return response.json();
})
.then(data => {
    // console.log(data)
    createEID(data);
    createFullName(data);
    // createEmail(data);
    // createMonthlySalary(data);
    // createYearOfBirth(data)
})