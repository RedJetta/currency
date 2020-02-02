<?php
require_once 'classes/Currency.php';
require_once 'classes/DBO.php';
require_once 'classes/Parser.php';
function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$var = new Parser();
$var->parseFilename='http://www.nbrb.by/API/ExRates/Rates?Periodicity=0';
$var->parseData();
$var->decodeData();
//debug($var);


$var1 = new DBO();
$var1->DatabaseConnection();
$var1->InsertCurrency($var->decodeData());
debug($var1);

$currency = new Currency();
?>