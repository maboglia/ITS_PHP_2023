<?php 

include 'user.php';

 class Registro{

    public $studenti =  array(); // Inizializzazione tramite funzione
    public function __construct()
    {
        $this->inizializza();
    }

    public function inizializza()
    {
        $studentiFile = file('studenti.csv');

        foreach($studentiFile as $studente){
            $spaccato = explode(",", $studente);
            $this->studenti[] = new Studente($spaccato[0], $spaccato[1]);
        }
    }

    public function login($user, $password)
    {
        foreach ($this->studenti as $studente) {
            if($studente->username == $user && $studente->password == $password){
                return $studente;
            }
        }
        return "assente";
    }



}

/* echo '<pre>';
print_r($studenti);
echo '</pre>'; */

?>