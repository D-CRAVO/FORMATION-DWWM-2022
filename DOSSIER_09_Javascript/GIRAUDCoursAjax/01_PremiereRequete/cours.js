// On crée un objet XMLHttpRequest
let xhr = new XMLHttpRequest();

// On initialise notre requête avec open()
xhr.open("GET", '#');

// On veut une réponse au format JSON
xhr.responseType = "json";

//On envoie la requête
xhr.send();