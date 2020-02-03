<?php

error_reporting(E_ALL); ini_set('display_errors', '1');

require_once 'classes/Currency.php';
require_once 'classes/DBO.php';
require_once 'classes/Parser.php';
require_once 'classes/CurrencyRepository.php';
require_once 'classes/CurrencyRepositoryInterface.php';

$host = '127.0.0.1';
$db   = 'currency';
$user = 'root';
$pass = '5287363_Maxim';
$charset = 'utf8';

$dbo = DBO::getInstance($host, $db, $user, $pass, $charset);
$pdo = $dbo->createPDO();

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

try {
    $var = new Parser('http://www.nbrb.by/API/ExRates/Rates?Periodicity=0');
    $currenciesList = $var->parseData(true);

    /**
     * @var Currency[] $currencies
     */
    $currencies = array();

    foreach ($currenciesList as $currencyItem) {
        $currency = new Currency();
        $currency
            ->setCurID((int) $currencyItem['Cur_ID'])
            ->setCurAbbreviation((string) $currencyItem['Cur_Abbreviation'])
            ->setCurOfficialRate((float) $currencyItem['Cur_OfficialRate'])
            ->setCurName((string) $currencyItem['Cur_Name'])
            ->setCurScale($currencyItem['Cur_Scale'])
        ;

        array_push($currencies, $currency);
    }

    $currencyRepository = new CurrencyRepository($pdo);

    $result = $currencyRepository->save($currencies);

    $a = $currencyRepository->find(291);
    $b = $currencyRepository->findAll();

//debug($var);


} catch (Exception $exception) {
    debug($exception->getMessage());exit();
}
debug($a);
debug($b);
exit;
//$var1->InsertCurrency($var->decodeData());
//debug($var1);

$var2 = new Currency();
//$var2->getAll($var1->createPDO());
//debug($var2->getCurAbbreviation());
//echo $var2->getCurAbbreviation()[10];



?>


