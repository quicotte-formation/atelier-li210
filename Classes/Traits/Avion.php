<?php

trait Volant{

    public function voler(){
        $this->y++;
    }
}

trait Roulant{

    public function rouler(){
        $this->x++;
    }
}

class Avion
{
    use Volant;
    use Roulant;

    private $x = 0;
    private $y = 0;

    public function __toString()
    {
        return sprintf("x=%d y=%d\n",$this->x, $this->y);
    }
}

$monAvion = new Avion();
$monAvion->rouler();
echo $monAvion;

