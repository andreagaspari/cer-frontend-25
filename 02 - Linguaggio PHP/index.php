<?php 
    // Mostra errori nel documento anche se disattivati a livello globale
    ini_set('display_errors', true);

    // Commento in linea
    /*
       Commento su più linee
    */

    /* Stringhe */
    echo "<h1 class='classe' attr=\"qui sono nella stringa\">Hello World!</h1>";
    echo '<h2 class="classe" attr=\'qui sono nella stringa\'>Tipi di Dato</h2>';

    function br() {
        echo "<br/>";
    }

    /* Booleani */
    // Vero -> true
    // Falso -> false

    /* Numeri */
    echo 10;
    echo "\n"; // A capo nel documento di output
    echo 1.15; 
    echo "<br/>"; // A capo nella pagina

    /* Nomi delle variabili */
    $nome_variabile; // OK
    $nomeVariabile; // OK
    $nomevariabile; // Attenzione! 

    /* Array */
    // Array anonimo, si accede ai valori usando l'indice
        $array_1 = [1, 2, 3, 4, 5];
        $array_2 = array(1, 2, 3, 4, 5);

    // Array con chiavi per accedere ai valori
    $array_3 = array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta"   => 21
    );
    echo '<h3>Stampa degli array:</h3>';
    
    echo $array_3; // Non posso stampare direttamente un array (Warning: Array to string conversion)
    br();

    print_r($array_3);
    br();

    var_dump($array_3);
    br();
    
    echo "<h2>Costrutto If / else</h2>";
    
    // Verifica se Mario Rossi è maggiorenne
    if ($array_3["eta"] >= 18) {
        echo "Utente maggiorenne<br/>";
    } else {
        echo "Utente minorenne<br/>";
    }
    br();

    // Verifica se Mario Rossi ha 18 anni
    if ($array_3["eta"] == "18") {
        echo "Utente diciottenne<br/>";
    } else {
        echo "Utente non diciottenne<br/>";
    }
    br();

    // Uguaglianza stretta, controlla valore E tipo
    if ($array_3["eta"] == 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] == "21") {} // Questa condizione è VERA!
    if ($array_3["eta"] === 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] === "21") {} // Questa condizione è FALSA!


    /** Operatori logici
     * 
     * AND  -> and oppure &&
     * OR   -> or oppure ||
     * XOR  -> xor
     * NOT  -> !
     */
    // Stampa "Falso"
    if (true and false):    // (true && false)
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;
    br();

    // Stampa "Vero"
    if (true or false):     // (true || false)
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;
    br();

    $persona_1 = array(
        "nome" => "Luca",
        "cognome" => "Rossi",
        "telefono" => ""
    );
    
    $persona_2 = array(
        "nome" => "Lorenza",
        "cognome" => "Verdi"
    );

    if ($persona_1["telefono"] != ""):
        echo "Tel: ";
        echo $persona_1["telefono"];
    endif;
    br();

    // Se la prima condizione è FALSA non valuto nemmeno la seconda, dato che il risultato è comunque FALSO
    if (array_key_exists("telefono", $persona_2) && $persona_2["telefono"] != ""):
        echo "Tel: " . $persona_2["telefono"];
    endif;

    echo "<h2>Cicli for e while</h2>";

    $voti = [6, 7, 7.5, 4, 9, 8, -1, 12];
    
    $somma = 0;
    $num_voti = 0;

    // Somma e conta SOLO i voti validi (0 < voto <= 10)
    for ($i = 0; $i < count($voti); $i++) :
        if ($voti[$i] > 0 && $voti[$i] <= 10) :
            $somma = $somma + $voti[$i];
            $num_voti++;
        endif;
    endfor;

    echo "La somma dei voti è: " . $somma;
    br();
    echo "Il numero di voti è: " . count($voti);
    br();
    echo "Il numero di voti validi è: " . $num_voti;
    br(); 

    $media = $somma / $num_voti;
    echo "La media dei voti è: " . $media;
    br();

    $numero = 45;
    $valori = [1, 3, 6, 87, 23, 5, 45, 17, 89, 12, 34];
    
    $trovato = true;

    $i = 0;
    while (!$trovato && $i < count($valori)) {
        if ($valori[$i] == $numero) {
            $trovato = true;
        }
        $i++;
    }

    /** 
     * Ciclo For equivalente 
     *
        for ($i = 0; $i < count($valori); $i++) :
            if ($valori[$i] == $numero) :
                $trovato = true;
                break;  // Break interrompe il ciclo più vicino
            endif;
        endfor;
    */
    
    if ($trovato) :
        echo $numero . " è presente nell'array";
    else :
        echo $numero . " non è presente nell'array";
    endif;
    br();

    /**
     * Ciclo inverso: prima fai le istruzioni, poi valuta la condizione 
     * 
        do {
            $istr;
        } while ($cond);
    */

    /**
     * Operatori di incremento e decremento
     */
    $i = 1;
    echo $i++; // Stampa il valore (1) e poi lo incrementa (2)
    br();
    echo ++$i; // Incrementa il valore (3) e poi lo stampa (3)
    br();

    echo $i--;
    br();
    echo --$i;
    br();


    $settimana = ["monday", "tuesday", "giorno", "wednesday", "thursday", "friday", "saturday", "sunday"];

    for ($i = 0; $i < count($settimana); $i++) :
        switch($settimana[$i]):
            case "monday":
                echo "Lunedì";
                break;
            case "tuesday":
                echo "Martedì";
                break;
            case "wednesday":
                echo "Mercoledì";
                break;
            case "thursday":
                echo "Giovedì";
                break;
            case "friday":
                echo "Venerdì";
                break;
            case "saturday":
                echo "Sabato";
                break;
            case "sunday":
                echo "Domenica";
                break;
            default: 
                echo "Giorno non valido";
        endswitch;
    endfor;

    br();

    

    $studenti = [
        array(
            "nome" => "Mario",
            "eta"  => 19,
            "voti" => [3, 7, 6, 10]
        ),
        array(
            "nome" => "Lucia",
            "eta"  => 14,
            "voti" => [6, 7, 8, 8]
        ),
        array(
            "nome" => "Rosa",
            "eta"  => 21,
            "voti" => [6, 9, 5, 8]
        ),
        array(
            "nome" => "Francesco",
            "eta"  => 24,
            "voti" => [7, 9, 9, 10]
        ),
        array(
            "nome" => "Giuseppe",
            "eta"  => 16,
            "voti" => [6, 6, 9, 6]
        ),
        array(
            "nome" => "Marta",
            "eta"  => 22,
            "voti" => [6, 5, 6, 6]
        )
    ];

    /**
     * Calcola la media artimetica dei voti.
     * 
     * @param int[] $voti I voti dello studente
     * 
     * @return float La media aritmetica dei voti
     */
    function calcola_media($voti) {
        $somma = 0;
        for ($i = 0; $i < count($voti); $i++) :
            $somma += $voti[$i];
        endfor;

        $media = $somma / count($voti);
        return $media;
    }

    foreach ($studenti as $studente) :
        $media = calcola_media($studente['voti']);
        echo $studente['nome'] . " ha una media di " .$media. ": ";
        if ($media >= 6) :
            echo "Promosso.";
        else:
            echo "Bocciato.";
        endif;
        br();
    endforeach;

    // Sunday 3 August 2025
    function formatta_data($data) {
        $parti = explode(" ", $data);
        $giorno_della_settimana = traduci_giorno_settimana($parti[0]);
        $giorno_del_mese = $parti[1];
        $mese = traduci_mese($parti[2]);
        $anno = $parti[3];

        return $giorno_della_settimana . " " . $giorno_del_mese . " " . $mese . " " . $anno;
    }

    echo formatta_data("Monday 14 September 2025");

    function traduci_giorno_settimana($giorno) {
        switch(strtolower($giorno)):
            case "monday":
                return "Lunedì";
            case "tuesday":
                return "Martedì";
            case "wednesday":
                return "Mercoledì";
            case "thursday":
                return "Giovedì";
            case "friday":
                return "Venerdì";
            case "saturday":
                return "Sabato";
            case "sunday":
                return "Domenica";
            default: 
                return false;
        endswitch;
    }

    function traduci_mese($mese) {
        switch(strtolower($mese)):
            case "january":
                return "Gennaio";
            case "february":
                return "Febbraio";
            case "march":
                return "Marzo";
            case "april":
                return "Aprile";
            case "may":
                return "Maggio";
            case "june":
                return "Giugno";
            case "july":
                return "Luglio";
            case "august":
                return "Agosto";
            case "september":
                return "Settembre";
            case "october":
                return "Ottobre";
            case "november":
                return "Novembre";
            case "december":
                return "Dicembre";
            default: 
                return false;
        endswitch;
    }

?>