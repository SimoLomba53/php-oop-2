<?php


class specificproduct extends Product{
    public $animali;
    public $cibo;
    public $giochi;
    public $cucce;


    function __construct($cibo,$giochi,$cucce) {
        $this->cibo=$cibo;
        $this->giochi=$giochi;
        $this->cucce=$cucce;
 }
}







?>