// Exercice 2.1

document.querySelector("#show1").addEventListener("click", function(){
    const major = 18;
    const retirement = 60;
    let result = "";
    console.log(result);
    const age = Number(document.querySelector("#age").value);
    if(age != ""){                  // Comment prendre en compte le fait que l'utilisateur puisse saisir autre chose qu'un nombre ?
        if(age < 0){
            result = "Vous n'êtes pas encore né(e) !"
        }else if(age < major){
            result = "Vous êtes encore mineur(e) !"
        }else if(age < retirement){
            const years = retirement - age;
            result = `Vous êtes à ${years} ans de la retraite !`;
        }else if(age === retirement){
            result = "Il est temps de prendre votre retraite !";
        }else if(age > retirement){
            const years = age - retirement;
            result = `Vous êtes à la retraite depuis ${years} années.`;
        }else{
            result = "Veuillez saisir une valeur correcte !"
        }
        document.querySelector("#result1").value = result;
    }else{
        alert("Veuillez saisir un âge.");
    }
});



// Exercice 2.2

document.querySelector("#show2").addEventListener("click", function(){
    // for(let i=1; i<6; i++){
    //     // On vérifie tout d'abord qu'il n'y a pas de champs vide
    //     if(document.querySelector(`#word1${i}`).value === ""){
    //         document.querySelector("#text2").value = "Veuillez renseigner tous les champs."
    //         // Et on nettoie les champs de droite en attendant la saisie de tous les champs
    //         for(let l=1; l<6; l++){
    //             document.querySelector(`#word2${l}`).value = "";
    //         }
        
    //     }else{
    //         // Si tous les champs sont remplis on passe au traitement
    //         //On récupère les valeurs saisies dans les champs
    //         const word11 = document.querySelector("#word11").value;
    //         const word12 = document.querySelector("#word12").value;
    //         const word13 = document.querySelector("#word13").value;
    //         const word14 = document.querySelector("#word14").value;
    //         const word15 = document.querySelector("#word15").value;
    //         const words = [word11, word12, word13, word14, word15];
    //         const wordsSort = [word11, word12, word13, word14, word15];
    //         wordsSort.sort();
    //         console.log(words);
    //         console.log(wordsSort);
    //         let result = "";
    //         for(let j=0; j<words.length; j++){
    //             if(words[j] === wordsSort[j]){
    //                 result = "Vos mots sont rangés par ordre alphabétique.";
    //                 for(let k=0; k<words.length; k++){
    //                     document.querySelector(`#word2${k+1}`).value = "";
    //                 }
    //             }else{
    //                 result = "Vos mots ne sont pas rangés par ordre alphabétique.\nIls vont maintenant être triés.";
    //                 for(let k=0; k<wordsSort.length; k++){
    //                     document.querySelector(`#word2${k+1}`).value = wordsSort[k];
    //                 }
    //             }
    //         }
    //         document.querySelector("#text2").value = result;        
    //     }
    // }

    // Extraction des valeurs saisies
    const word11 = document.querySelector("#word11").value;
    const word12 = document.querySelector("#word12").value;
    const word13 = document.querySelector("#word13").value;
    const word14 = document.querySelector("#word14").value;
    const word15 = document.querySelector("#word15").value;

    // Agrémentation des tableaux de calcul et tri
    const words = [word11, word12, word13, word14, word15];
    const wordsSort = [word11, word12, word13, word14, word15];
    wordsSort.sort();

    // Vérification si mots triés ou non par ordre alphabétique
    let result = "";
    for(let j=0; j<words.length; j++){
        if(words[j] === wordsSort[j]){
            result = "Vos mots sont rangés par ordre alphabétique.";
            for(let k=0; k<words.length; k++){
                document.querySelector(`#word2${k+1}`).value = "";
            }
        }else{
            result = "Vos mots ne sont pas rangés par ordre alphabétique.\nIls vont maintenant être triés.";
            for(let k=0; k<wordsSort.length; k++){
                document.querySelector(`#word2${k+1}`).value = wordsSort[k];
            }
        }
    }
    document.querySelector("#text2").value = result;  
});



// Exercice 2.3

document.querySelector("#show3").addEventListener("click", function(){

    // Extraction des valeurs saisies
    const originalHours = Number(document.querySelector("#originalHours").value);
    const originalMinutes = Number(document.querySelector("#originalMinutes").value);
    const originalSeconds = Number(document.querySelector("#originalSeconds").value);
    
    // Vérification de l'exactitude des valeurs saisies
    if(originalHours<0 || originalHours>23){
        alert("Veuillez saisir une heure correcte.");
    }else if(originalMinutes<0 || originalMinutes>59){
        alert("Veuillez saisir des minutes correctes.")
    }else if(originalSeconds<0 || originalSeconds>59){
        alert("Veuillez saisir des secondes correctes.")
    }

    // Vérification de passage à la valeur supérieure
    if(originalSeconds === 59 && originalMinutes === 59){
        let calculatedSeconds = 0;
        let calculatedMinutes = 0;
        let calculatedHours = originalHours + 1;
    }else if(originalSeconds === 59){
        calculatedSeconds = 0;
        calculatedMinutes = originalMinutes + 1;
        calculatedHours = originalHours;
    }else{
        calculatedSeconds = originalSeconds + 1;
        calculatedMinutes = originalMinutes;
        calculatedHours = originalHours;
    }

    // Ajout d'un zéro si valeur inférieure à 10
    if(calculatedSeconds<10){
        calculatedSeconds = "0" + calculatedSeconds;
    }
    if(calculatedMinutes<10){
        calculatedMinutes = "0" + calculatedMinutes;
    }
    if(calculatedHours<10){
        calculatedHours = "0" + calculatedHours;
    }

    // Affichage des valeurs calculées
    document.querySelector("#calculatedTime").value = `${calculatedHours} : ${calculatedMinutes} : ${calculatedSeconds}`;
});



// Exercice 2.4

document.querySelector("#show4").addEventListener("click", function(){
    const min = 1900;
    const max = 2022;
    const secretNb = document.querySelector("#secretNb").value;
    if(secretNb < min){
        document.querySelector("#minNb").value = secretNb;
        console.log("min");
        alert("Tentez encore votre chance !");
    }else if(secretNb > 2022){
        document.querySelector("#maxNb").value = secretNb;
        console.log("max");
        alert("Tentez encore votre chance !");
    }else{
        alert("Bravo !")
    }
});



// Exercice 2.5

function getRandom(min, max){
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
}

document.querySelector("#start5").addEventListener("click", function(){
    alert("Commencez.");
    const minNb = 0;
    const maxNb = 9;
    const secretNb5 = getRandom(minNb, maxNb);
    console.log(secretNb5);
});

document.querySelector("#show5").addEventListener("click", function(){
    const choice5 = Number(document.querySelector("#choice5").value);
    console.log(secretNb5);
    console.log(choice5);
    console.log("test1");
    if(choice5 === secretNb5){
        alert("Bravo !");
    }else if(choice5 < secretNb5){
        document.querySelector("#minNb5").value = choice5;
        alert("Tentez encore votre chance !");
    }else if(choice5 > secretNb5){
        document.querySelector("#maxNb5").value = choice5;
        alert("Tentez encore votre chance !");
    }
});
