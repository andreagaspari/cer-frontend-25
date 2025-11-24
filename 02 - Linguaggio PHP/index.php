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
    while (!$trovato && $i < count($valori)) :
        if ($valori[$i] == $numero) :
            $trovato = true;
        endif;
        $i++;
    endwhile;

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
?>