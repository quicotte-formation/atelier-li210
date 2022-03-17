<?php

include_once "Widget.php";

class TextArea extends Widget
{

    public function construireHTML()
    {
        return sprintf("<textarea class='%s'>%s</textarea>",$this->classeCSS,$this->value);
    }
}