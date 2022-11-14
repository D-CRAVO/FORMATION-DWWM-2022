function getDate(){
    const myDate = new Date();
    let myDay = myDate.getDate();
    let myMonth = myDate.getMonth() + 1;
    let myYear = myDate.getFullYear();
    myDay = (myDay<10)? "0"+myDay : myDay;
    myMonth = (myMonth<10) ? "0"+myMonth : myMonth;
    return `${myDay} / ${myMonth} / ${myYear}`;
}

console.log(getDate());

function getTime(){
    const myDate = new Date();
    let myHours = myDate.getHours();
    let myMinutes = myDate.getMinutes();
    let mySeconds = myDate.getSeconds();
    myHours = (myHours<10) ? "0"+myHours : myHours;
    myMinutes = (myMinutes<10) ? "0"+myMinutes : myMinutes;
    mySeconds = (mySeconds<10) ? "0"+mySeconds : mySeconds;
    return `${myHours} : ${myMinutes} : ${mySeconds}`
}

console.log(getTime());

console.log(document.querySelector("#btnHours"));

document.querySelector("#btnHours").addEventListener("click", function(){
    document.querySelector("#inTime").value = getTime();
});

document.querySelector("#btnDate").addEventListener("click", function(){
    document.querySelector("#inDate").value = getDate();
});


