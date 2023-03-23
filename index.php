<?php
require_once __DIR__ . "/specificproduct.php";

class Product{
    public $animali;
    public $variprodotti;


 
    function __construct($animali,Variprodotti $variprodotti) {
        $this->animali=$animali;
        $this->variprodotti=$variprodotti;

 }
};

class Variprodotti{
    public $cibo;
    public $giochi;
    public $cucce;

    public function __construct( $cibo,$giochi,$cucce) {
       $this->cibo=$cibo;
       $this->giochi=$giochi;    
       $this->cucce=$cucce; 
    }
}

class Dettagli{
    public $immagine;
    public $titolo;
    public $prezzo;
    public $icona;
    public $tipo;
    
    public function __construct( $immagine,$titolo,$prezzo,$icona,$tipo) {
       $this->immagine=$immagine;
       $this->titolo=$titolo;    
       $this->prezzo=$prezzo;
       $this->icona=$icona;  
       $this->tipo=$tipo; 
    }
}

  $cani=new Product("Cani",new Variprodotti(new Dettagli("img","Crocchette Dog","19.90$","icona","Prodotto per cani"),new Dettagli("img","Finto Legnetto","9.90$","icona","Prodotto per cani"),new Dettagli("img","Cucca Jackson Wood","69.90$","icona","Prodotto per cani")));
  $gatti=new Product("Gatti",new Variprodotti("Scatoletta Cats","Pallina gonfiabile","Yaheetch Albero Tiragraffi"));

  var_dump($cani,$gatti);
?>