<?php

require_once "vendor/autoload.php";

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("personnes.xls");
echo $spreadsheet->getActiveSheet()->getCell("A2")->getValue();