<?php
require_once 'classes/Currency.php';
require_once 'classes/DBO.php';
require_once 'classes/Parser.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$var = new Parser('http://www.nbrb.by/API/ExRates/Rates?Periodicity=0');
$var->parseData(true);
//debug($var);

$host = '127.0.0.1';
$db   = 'currency';
$user = 'root';
$pass = '5287363_Maxim';
$charset = 'utf8';

$dbo = DBO::getInstance($host, $db, $user, $pass, $charset);
$pdo = $dbo->createPDO();

$currencyRepository = new CurrencyRepository($pdo);

//$var1->InsertCurrency($var->decodeData());
//debug($var1);

$var2 = new Currency();
$var2->getCurAbbreviation($var1->createPDO());
$var2->getCurOfficialRate($var1->createPDO());
//$var2->getAll($var1->createPDO());
debug($var2->getCurAbbreviation());
echo $var2->getCurAbbreviation()[10];



?>


