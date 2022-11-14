// Exercice 1.1

document.querySelector("#btn11").addEventListener("click", function(){
    let va1 = document.querySelector("#va1").value; console.log("va1 = " + va1);
    let va2 = document.querySelector("#va2").value; console.log("va2 = " + va2);
    if(va1 === "" || va2 === ""){
        alert("Veuillez entrer des valeurs.");
    } else {
        let va3 = va2;
        va2 = va1;
        va1 = va3;
        document.querySelector("#va4").value = va1;
        document.querySelector("#va5").value = va2;
    }
});

// document.querySelector("#btn12").addEventListener("click", function(){
//     document.querySelector("#va1").value = "";
//     document.querySelector("#va2").value = "";
//     document.querySelector("#va4").value = "";
//     document.querySelector("#va5").value = "";
// })



// Exercice 1.2

document.querySelector("#btn21").addEventListener("click", function(){
    // const lastname = prompt("Quel est votre Nom ?");
    // const firstname = prompt("Quel est votre Prénom ?");
    // const age = prompt("Quel est votre âge ?");
    document.querySelector("#lastname").value = prompt("Quel est votre Nom ?");
    document.querySelector("#firstname").value = prompt("Quel est votre Prénom ?");
    document.querySelector("#age").value = prompt("Quel est votre âge ?");
});

// document.querySelector("#btn22").addEventListener("click", function(){
//     document.querySelector("#lastname").value = lastname;
//     document.querySelector("#firstname").value = firstname;
//     document.querySelector("#age").value = age;
// });

// document.querySelector("#btn23").addEventListener("click", function(){
//     document.querySelector("#lastname").value = "";
//     document.querySelector("#firstname").value = "";
//     document.querySelector("#age").value = "";
// });



// Exercice 1.3

document.querySelector("#btn31").addEventListener("click", function(){
    const birthYear = new Date(document.querySelector("#birthYear").value).getFullYear();
    console.log(birthYear);
    const yearNow = new Date(Date.now()).getFullYear();
    console.log(yearNow);
    document.querySelector("#age3").value = yearNow - birthYear;
});

// document.querySelector("#btn32").addEventListener("click", function(){
//     document.querySelector("#birthYear").value = "";
//     document.querySelector("#age3").value = "";
// });



// Exercice 1.4

document.querySelector("#btn41").addEventListener("click", function(){
    const nbarticles = document.querySelector("#nbarticles").value;
    const prixHT = document.querySelector("#prixHT").value;
    document.querySelector("#prixTTC").value = (prixHT * 1.2) * nbarticles;
});

// document.querySelector("#btn42").addEventListener("click", function(){
//     document.querySelector("#nbarticles").value = "";
//     document.querySelector("#prixHT").value = "";
//     document.querySelector("#prixTTC").value = "";
// });



// Exercice 1.5

document.querySelector("#hello").addEventListener("click", function(){
    const name = prompt("Quel est votre nom ?");
    document.querySelector("#texteOrigine").value = name;
    document.querySelector("#texteModifie").value = "Bonjour " + name + "! \nComment allez-vous par cette belle journée ?"
});

document.querySelector("#bold").addEventListener("click", function(){
    const texte = document.querySelector("#texteOrigine").value;
    if(texte != ""){
        document.querySelector("#texteModifie").value = texte;
        document.querySelector("#texteModifie").setAttribute("style", "font-weight: bold;");
    }else{
        alert("GRAS : Veuillez saisir un texte !");
    }
});

document.querySelector("#italic").addEventListener("click", function(){
    const texteOrigine = document.querySelector("#texteOrigine").value;
    if(texteOrigine != ""){
        document.querySelector("#texteModifie").value = texteOrigine;
        document.querySelector("#texteModifie").setAttribute("style", "font-style: italic;")
    }else{
        alert("ITALIQUE : Veuillez saisir du texte !");
    }
});

document.querySelector("#uppercase").addEventListener("click", function(){
    const texteOrigine = document.querySelector("#texteOrigine").value;
    if(texteOrigine != ""){
        document.querySelector("#texteModifie").value = texteOrigine.toUpperCase()
    }else{
        alert("MAJUSCULES : Veuillez saisir du texte !");
    }
});

document.querySelector("#lowercase").addEventListener("click", function(){
    const texteOrigine = document.querySelector("#texteOrigine").value;
    if(texteOrigine != ""){
        document.querySelector("#texteModifie").value = texteOrigine.toLowerCase();
    }else{
        alert("MINUSCULES : Veuillez saisir du texte !")
    }
});