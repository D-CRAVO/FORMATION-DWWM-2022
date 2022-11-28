const tbody = document.querySelector('tbody');
const thx = document.querySelectorAll('th');
const trxb = tbody.querySelectorAll('tr');

thx.forEach(th => th.addEventListener('click', () =>{
    let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
    classe.forEach(tr => tbody.appendChild(tr));
}));

const compare = (ids, asc) => (row1, row2) => row.children[ids].textContent;