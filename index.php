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

  $gatti=new Product("Gatti",new Variprodotti("Crocchette Dog","Finto bastone","Cucca Jackson Wood"));
  $cani=new Product("Cani",new Variprodotti("Scatoletta Cats","Pallina gonfiabile","Yaheetch Albero Tiragraffi"));

  var_dump($cani,$gatti);
?>