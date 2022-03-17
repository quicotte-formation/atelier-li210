<?php

abstract class Electro
{
    private $allume=false;

    public function on(){
        $this->allume = true;
    }

    public function off(){
        $this->allume = false;
    }

    abstract function fonction();
}

class Bidon extends Electro {
    function fonction()
    {
    }
}

class Telecommande{

    function pilote(Electro $electro){
        $electro->on();
        $electro->fonction();
        $electro->off();
    }
}
