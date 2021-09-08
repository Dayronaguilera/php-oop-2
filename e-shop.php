
<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
    ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    Strutturare le classi gestendo l’ereditarietà dove necessario;
    ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
    Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
 -->
<?php 

require_once('product.php');
require_once('user.php');
require_once('userPremium.php');

class EShop {

    public $name; // di default sara NULL
    public $dominio; // di default sara NULL
    private $products = [];

    public function __construct( string $nameSite, string $urlSite){ // un costrutto per creare le nostre variabili(value), anche se public 
        $this->name = $nameSite;
        $this->dominio = $urlSite;
    }
    
    public function addProduct(Product $nameProduct){ // richiamando questa function andremo a pushare il nome all'interno del array 
        return $this->products[] = $nameProduct;
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

$ecommerce = new EShop('Amazon','www.amazon.it'); // riampiamo i dati richiesti con costruct

$primoLibro = new libri();
var_dump($primoLibro); // stampiamo l'oggetto 

echo "<hr/>";

$libro = new Libri();
$cell = new Telefonia();
$ia = new IA();

$ecommerce->addProduct($libro);

var_dump($ecommerce);