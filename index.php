<?php


 class auto {
     public $merk;
     public $model;
     public $kenteken;
     public $prijs;
     public $bouwjaar;
     public $apk;


     public function __construct($merk, $model, $kenteken, $prijs, $bouwjaar, $apk)
     {

         $this->merk = $merk;
         $this->model = $model;
         $this->kenteken = $kenteken;
         $this->prijs = $prijs;
         $this->bouwjaar = $bouwjaar;
         $this->apk = $apk;

     }
 }

$auto = new auto("bmw", "m3", "73-MG-HJ", "111.548", "2017", "2016");

    echo $auto->$merk;
    echo $auto->$model;
    echo $auto->$kenteken;
    echo $auto->$prijs;
    echo $auto->$bouwjaar;
    echo $auto->$apk;


class klant
{
    public $naam;
    public $telefoonnummer;
    public $auto;
    public $email;
    public $kenteken;
    public $adres;

    public function __construct($naam, $telefoonnummer, $auto, $email, $kenteken, $adres)
    {


        $this->merk = $naam;
        $this->model = $telefoonnummer;
        $this->kenteken = $auto;
        $this->prijs = $email;
        $this->bouwjaar = $kenteken;
        $this->apk = $adres;


    }
}

$klant = new klant("jan", "0617358027", "BMW", "jan_devries@hotmail.com", "73-MG-HJ", "posthumalaan");

echo $auto->$merk;
echo $auto->$model;
echo $auto->$kenteken;
echo $auto->$prijs;
echo $auto->$bouwjaar;
echo $auto->$apk;

var_dump($auto, $klant);



