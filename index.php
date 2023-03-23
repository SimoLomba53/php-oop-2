<?php
 class Product{
    public $animali;

 
 function __construct($animali) {
        $this->animali=$animali;
 }
};

$gatti=new Product("Gatti");
$cani=new Product("Cani");

var_dump($cani,$gatti);
?>