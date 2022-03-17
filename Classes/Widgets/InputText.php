<?php

include_once "Widget.php";

class InputText extends Widget
{
    public function construireHTML()
    {
        return sprintf("<input type='text' value='%s' class='%s'>",$this->value, $this->classeCSS);
    }
}