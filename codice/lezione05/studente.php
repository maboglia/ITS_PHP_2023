<?php

class Studente {
    
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;

    }

    public function firma()
    {
        return $this->nome . ' ' . strtoupper($this->cognome);
    }


}

$studenti = file('studenti.csv');
$studentiOggetti = [];

foreach($studenti as $studente){
    
    $stringaSplittata = explode(',', $studente);

    $studentiOggetti[] = new Studente($stringaSplittata[0],  $stringaSplittata[1]);

}

header("Content-Type:application/json");//Tipo MIME

echo json_encode($studentiOggetti);

$collegamento = fopen("studenti.json", 'w');

fwrite($collegamento, json_encode($studentiOggetti));

fclose($collegamento);



