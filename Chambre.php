<?php

Class Chambre 
    {

         private string $numero;
         private string $nbLits;
         private float $prix;
         private bool $statut; // true : disponible / false : reservé
         private Hotel $hotel;
         private bool $wifi; // true : wifi / false : no wifi
         private array $reservation = [];
    
        public function __construct ($hotel, $numero,  $nbLits,  $prix)
    {

        $this-> numero= $numero;

        $this-> nbLits= $nbLits;

        $this-> prix= $prix;

        $this -> hotel = $hotel; 
        $this -> wifi = true;  // wifi 
        $this -> statut = true; // disponible 
        $this ->  reservation = [];
        $this -> hotel -> addChambres ($this);

        // $this-> hotel -> addChambres ($this); --> CAR une chambre n'appartient qu'à un hôtel donc pas de tableau
     
    }

    // GETTERS AND SETTERS 

    public function getnumero ()
    {
    return $this-> numero;
    }

public function setnumero ($numero)

    {
    return $this -> numero = $numero;

    }

    public function getnbLits ()
    {
    return $this-> nbLits;
    }

public function setnbLits ($nbLits)

    {
    return $this -> nbLits = $nbLits;

    }
    public function getprix ()
    {
    return $this-> prix;
    }

public function setprix ($prix)

    {
    return $this -> prix = $prix;

    }
    public function gethotel ()
    {
    return $this-> hotel;
    }

public function sethotel ($hotel)

    {
    return $this -> hotel = $hotel;

    }
    public function getstatut () // statut true pour chambres disponibles
    {
    return $this-> statut;
    }

public function setstatut (bool $statut)

    {
    return $this -> statut = $statut;

    }
    public function getwifi () // wifi true pour wifi disponibles
    {
    return $this-> wifi;
    }

public function setwifi (bool $wifi)

    {
    return $this -> wifi = $wifi;

    }


    // FONCTIONS attribuées à la classe Chambre : 

    public function addReservation (Reservation $reservation)
    {
        $this->reservation[] = $reservation;
    }
    
    public function disponibilteStatut() 
    {
        if ($this -> statut == true) 
        {   
            $this -> statut = false;
        }
        else {
            $this -> statut = true;

        }
    }


    public function __toString()
    {  
    return $this -> numero ;
    }
}