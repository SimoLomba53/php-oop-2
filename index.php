<?php
require_once __DIR__ . "/specificproduct.php";

class Product{
     public $immagine;
     public $titolo;    
     public $prezzo;
     public $icona;  
     public $tipo; 


 
    function __construct($immagine,$titolo,$prezzo,$icona,Tipo $tipo) {
       $this->immagine=$immagine;
       $this->titolo=$titolo;    
       $this->prezzo=$prezzo;
       $this->icona=$icona;  
       $this->tipo=$tipo; 

 }
};

class Tipo{
    public $animalededicato;


public function __construct($animalededicato){
    $this->animalededicato=$animalededicato;
}
}

$cuccadog=new Product("img","Cuccia Spike Classic","89.99$","icon",new Tipo("Prodotto per cani"));
$cuccacat=new Product("img","yaheetch Albero Tiragraffi","49.99$",icon,new Tipo("Prodotto per gatti"));
$crocchettedog=new Product("img","Friskies - Crocchette proteiche","19.99$","icon",new Tipo("Prodotto per cani"));
$crocchettecat=new Product("img","Ultra premium - Crocchette per gatti","9.99$",icon,new Tipo("Prodotto per gatti"));
$legnettodog=new Product("img","Burna - Gioco per cani","4.99$","icon",new Tipo("Prodotto per cani"));
$pallinacat=new Product("img","Cheerble Ball - Palla interattiva per gatti","49.99$",icon,new Tipo("Prodotto per gatti"));


  

?>