<?php

class Movie {
    public $titolo;
    public $titolo_originale;
    public $regista;
    public $anno;
    public $genere;
    public $age;
    public $accesso;

    public function __construct(string $titolo, string $titolo_originale,string $regista, int $anno, string $genere, int $age, string $accesso )
    {
        $this->titolo = $titolo;
        $this->titolo_originale = $titolo_originale;
        $this->regista = $regista;
        $this->anno= $anno;
        $this->genere= $genere;
        $this->age= $age;
        $this->accesso= $accesso;
        
      
    }

    public function checkAge($age_user){
        if($age_user < $this->age){
            return $this->accesso = 'Non puoi guardare questo film';  
        } else{
            return $this->accesso = 'Puoi guardare questo film';
        }

    }

}