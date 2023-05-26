<?php

class Maman{
    public function getNom(){
        return "je suis la maman".PHP_EOL;
    }
}
class Enfant extends Maman{
     public function getNom()
     {
        return parent::getNom(). "je suis l'enfant".PHP_EOL;
     }
}
$enfant = new Enfant();
echo $enfant->getNom();