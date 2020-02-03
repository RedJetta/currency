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
$var1->user;
$var1->pass;
$var1->createPDO();
//$var1->InsertCurrency($var->decodeData());
debug($var1);

$var2 = new Currency();
$var2->getCurAbbreviation($var1->createPDO());

debug($var2);

$currency = new Currency();


?>


