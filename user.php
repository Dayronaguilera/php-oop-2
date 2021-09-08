<?php

// inseriamo tutti i dati relativi l'utente ed il pagamento

class User {

    public $discount = 0;
    protected $name; 
    protected $lastName;
    protected $typeCard;
    protected $numberCard;
    protected $expiryDate;

    public function __construct(string $name, string $lastName, string $typeCard, int $numberCard, int $expiryDate){ // associamo i nostri dati con le variabili
        $this->name = $name;
        $this->lastName = $lastName;
        $this->typeCard = $typeCard;
        $this->numberCard= $numberCard;
        $this->expiryDate = $expiryDate;

    }

    public function getUser(){ // facciamo una get delle varie variabili altrimeti nn possiamo modificarle in quanto (protected)
        return $this->name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getTypecard(){
        return $this->typecard;
    }
    public function getNumberCard(){
        return $this->numberCard;
    }
    public function getExpiryDate(){
        return $this->expiryDate;
    }
}