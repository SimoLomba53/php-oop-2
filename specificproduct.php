<?php
require_once __DIR__ . "/index.php";

class specificproduct extends product{
     public $immagine;
     public $titolo;    
     public $prezzo;
     public $icona;  
     public $tipo; 
     public $provenienza; 
     public $peso; 
     



   function __construct($provenienza,$peso) {
        $this->provenienza=$provenienza;
        $this->peso=$peso;
 }
}




//var_dump($cuccadog,$cuccacat,$crocchettedog,$crocchettecat,$legnettodog,$pallinacat)



?>