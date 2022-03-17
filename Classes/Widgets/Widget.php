<?php

include_once "InputText.php";
include_once "TextArea.php";

abstract class Widget
{
    protected $value;
    protected $classeCSS;

    abstract public function construireHTML();

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getClasseCSS()
    {
        return $this->classeCSS;
    }

    /**
     * @param mixed $classeCSS
     */
    public function setClasseCSS($classeCSS): void
    {
        $this->classeCSS = $classeCSS;
    }
}

$w1 = new TextArea();
$w1->setValue("COUCOU");

$w2 = new InputText();
$w2->setValue("HELLO");
$w2->setClasseCSS("col-12");

echo $w1->construireHTML();
echo $w2->construireHTML();
echo $w2->construireHTML();
echo $w2->construireHTML();
echo $w2->construireHTML();