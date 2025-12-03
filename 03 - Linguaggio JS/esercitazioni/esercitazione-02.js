/* Esercizio 1 */
function esercizio01() {

    let numeroInserito = window.prompt("Inserisci un numero da 0 a 10:");
    let numeroDaTrovare = Math.ceil(Math.random() * 10);
    
    while (numeroInserito != numeroDaTrovare) {
        numeroInserito = window.prompt("Sbagliato, riprova!");
    }

    document.getElementById('es1-numeroScelto').innerText = "Il numero era " + numeroDaTrovare + "!";
    document.getElementById("es1-risultato").innerText = "Congratulazioni!";
}

function esercizio02() {
    let numeroInserito = window.prompt("Inserisci un numero da 1 a 10:");

    document.getElementById('es2-numeroInserito').innerText = numeroInserito;

    let risultato = 1;

    for (let i = 1; i <= numeroInserito; i++) {
        risultato *= i;        
    }

    document.getElementById("es2-risultato").innerText = risultato;
}

function esercizio03() {
    let studente = {
        nome: "",
        cognome: "",
        matricola: "",
        voti: []
    }

    // Input
    for (chiave in studente) {
        if (chiave != "voti") {
            studente[chiave] = window.prompt("Inserire " + chiave);
        } else {
            let stringaVoti = window.prompt("Inserire i voti separati da ','");
            studente[chiave] = stringaVoti.split(",");
        }
    }

    // Calcolo Media
    let mediaVoti = 0;
    for (voto of studente.voti) {
        mediaVoti += parseInt(voto);
    }
    studente.mediaVoti = mediaVoti / studente.voti.length;

    // Stampa
    let risultato = "";
    for (chiave in studente) {
        if (chiave != "voti") 
            risultato += chiave + ": " + studente[chiave] + "<br/>";
    }
    document.getElementById("es3-risultato").innerHTML = risultato;
}