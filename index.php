<?php
require_once __DIR__ . "/specificproduct.php";

class product{
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
$products=[
new product("https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/9/400/60837_spike_classic_outside_fg_9141_9.jpg","Cuccia Spike Classic","89.99$","icon",new Tipo("Prodotto per cani")),
new product("https://images.eprice.it/nobrand/0/Lightbox/361/213860361/8EA79204-000B-496E-9294-350FF93B9C17.jpg","Yaheetech Albero Tiragraffi","49.99$","icon",new Tipo("Prodotto per gatti")),
new product("https://www.ideashoppingcenter.it/files/archivio_Files/Foto/38620_2.JPG","Friskies - Crocchette proteiche","19.99$","icon",new Tipo("Prodotto per cani")),
new product("https://medias.ultrapremiumdirect.com/italy/production/catalog/products/003001/1.jpg?tr=q-50,w-554,h-554&v=566152243","Ultra premium - Crocchette per gatti","9.99$","icon",new Tipo("Prodotto per gatti")),
new product("https://i.etsystatic.com/18023961/r/il/41277c/2356404109/il_794xN.2356404109_3tt1.jpg","Burna - Gioco per cani","4.99$","icon",new Tipo("Prodotto per cani")),
new product("https://cdn.shopify.com/s/files/1/0037/5209/9958/products/f96dc4f710870818962cf4481735d9ab_720x.jpg?v=1678173544","Cheerble Ball - Palla interattiva per gatti","49.99$","icon",new Tipo("Prodotto per gatti")),
]





  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1 class="maintitle">IL NOSTRO CATALOGO</h1>
        <div class="card">
            <?php foreach($products as $prod) : ?>
            <div class="singlelement">
                <img src="<?php echo $prod->immagine ?>" alt="">
                <h1><?php echo $prod->titolo ?></h1>
                <p><?php echo $prod->prezzo ?></p>
                <p><?php echo $prod->icona ?></p>
                <p><?php echo $prod->Tipo->animalededicato?></p>
                
            </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>