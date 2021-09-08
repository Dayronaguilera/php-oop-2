<!-- 
    public -> visibile a tutti
    pivate -> nascosto a chiunque / visibile solo nella classe in cui si trova
    protected -> puo essere esteso e sovrascritto dalle classi figlie ma nn esternamente
 -->

<?php

class Product { // verra ereditata dalle altre classi figlie

    protected $label = 'nome prodotto'; // dichiariamo le nostre variabili con le classificazzioni in comune 

    protected $productCat; 

    public function getLabel() { // con il get rendiamo visibile il contenuto per poterlo modificare 
        return $this->label;
    }

    public function getProductCat() {
        return $this->productCat;
    }

}

class Libri extends Product { // le classi figlie estendono le classi genitore(product)

    // qui inseriremo solo le proprietà relative al sigolo prodotto

    public $price = 10;
    public $page = 304;
    public $lenguage = 'italiano';



    public function __construct(){  // definisce la struttura creata nel padre
        $this->label = 'la casa sul mare celeste';
        $this->productCat = 'eBook';
    }

}

// class Libri2 extends Product {

//     public $price = 22;
//     public $page = 1094;
//     public $lenguage = 'italiano';



//     public function __construct(){
//         $this->label = 'una vita come tante';
//         $this->productCat = 'eBook';
//     }

// }

class Telefonia extends Product {

    public $price = 199;
    public $color = 'red';

    public function __construct()
    {
        $this->label = 'xiaomi redmi';
        $this->productCat = 'cellulare';
    }

}

// class Telefonia2 extends Product {

//     public $price = 129;
//     public $color = 'white';

//     public function __construct()
//     {
//         $this->label = 'apple airpods';
//         $this->productCat = 'cuffie';
//     }

// }

class IA extends Product {

    public $price = 30;
    public $color = 'black';

    public function __construct()
    {
        $this->label = 'echo show';
        $this->productCat = 'schermo intelligente';
    }

}

// class IA2 extends Product {

//     public $price = 22;
//     public $color = 'black';

//     public function __construct()
//     {
//         $this->label = 'echo dot';
//         $this->productCat = 'altoparlante intelligente';
//     }

// }
