
<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
    ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    Strutturare le classi gestendo l’ereditarietà dove necessario;
    ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
    Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
 -->
<?php 

require_once('products.php');

class ECommerce {

    public $name;
    public $dominio;
    private $product = [];

    public function __construct( string $nameSite, string $urlSite){ // un costrutto per creare le nostre variabili(value), anche se public 
        $this->name = $nameSite;
        $this->dominio = $urlSite;
    }
    
    public function addProduct($nameProduct){ // richiamando questa function andremo a pushare il nome all'interno del array 
        return $this->product[] = $nameProduct;
    }

}



class User {

    public $sconto = 0;

}

class PremiumUser {

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.
    public $sconto = 50;


}

