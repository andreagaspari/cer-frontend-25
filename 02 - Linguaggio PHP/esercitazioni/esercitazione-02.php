<?php

/**
 * Esercizio 1 
 * Dato un insieme di valori, trovare il numero più alto
 */
$valori = [1, 3, 5, 2, 5, 3, 9, 4, 7];
$massimo = 0;

for ($i = 0; $i < count($valori); $i++) :
    if ($valori[$i] > $massimo) :
        $massimo = $valori[$i];
    endif;
endfor;

?>
    <div>
        <h2>Esercizio 01</h2>
        <p>
            Il valore maggiore è: <?php echo $massimo; ?>
        </p>
    </div>

<?php


/**
 * Esercizio 2
 * Stampa tutti gli elementi, finché l'elemento corrente è
 * inferiore a 15
 */
$valori = [12, 13, 5, 12, 15, 3, 19, 4, 17];
$output = "";

for ($i = 0; $i < count($valori); $i++) :
    if ($valori[$i] < 15) :
        $output .= $valori[$i] . " ";
    else :
        break;
    endif;
endfor;

$i = 0;
while ($i < count($valori) && $valori[$i] < 15) :
   $output .= $valori[$i++] . " ";
endwhile;

?>
    <div>
        <h2>Esercizio 02</h2>
        <p>
            I valori sono: <br/>
            <?php echo $output; ?>
        </p>
    </div>
<?php

/**
 * Esercizio 3
 *  - Stampa il nome di tutte le persone maggiorenni
 *  - Calcola l'età media di tutte le persone
 */
$persone = [
    array(
        "nome" => "Mario",
        "eta"  => 19
    ),
    array(
        "nome" => "Lucia",
        "eta"  => 14
    ),
    array(
        "nome" => "Rosa",
        "eta"  => 21
    ),
    array(
        "nome" => "Francesco",
        "eta"  => 24
    ),
    array(
        "nome" => "Giuseppe",
        "eta"  => 16
    ),
    array(
        "nome" => "Marta",
        "eta"  => 22
    )
];

$anni = 0;
?>
    <div>
        <h2>Esercizio 03</h2>
        <p>Le persone maggiorenni sono:</p>
        <ul>
            <?php
                foreach ($persone as $persona) :
                    if ($persona["eta"] >= 18) :
                        echo "<li>".$persona["nome"]."</li>";
                    endif;
                    $anni += $persona["eta"];
                endforeach;
                /**
                 * Ciclo for alternativo
                 *
                for ($i = 0; $i < count($persone); $i++) :
                    if ($persone[$i]["eta"] >= 18) :
                        echo "<li>".$persone[$i]["nome"]."</li>";
                    endif;
                    $anni += $persone[$i]["eta"];
                endfor;  
                */
            ?>
        </ul>
        <p>
            L'età media delle persone è: 
            <?php echo ( $anni / count($persone) ); ?>
        </p>
    </div>

<?php

    /**
     * Esercizio 04
     * 
     * Data l'età di una persona, ritorna se può guidare il 125
     * 
     * @param int $eta L'età della persona
     * @return bool Vero se può guidare il 125, falso altrimenti
     */
    function puo_guidare_125($eta) {
        if ($eta >= 16) 
            return true;

        return false;
    }

    /**
     * Esercizio 05
     * 
     * Dato un numero, verifica se è divisibile per 3:
     * ($numero % 3 == 0) => Il resto della divisione tra $numero e 3 è uguale a 0
     * 
     * @param int $numero Il numero da valutare
     * @return bool Vero se divisibile per 3, falso altrimenti
     */
    function divisibile_per_3($numero) {
        return $numero % 3 == 0;
    }

    /**
     * Esercizio 06
     * 
     * Dato un numero, ritornarlo in formato EURO (€ 10.00)
     * 
     * @param float $numero Il prezzo in formato numerico
     * @return string Il prezzo in formato € 10.00
     */
    function number_to_euro($numero) {
        return "€ " . number_format($numero, 2, ".", "");
    }