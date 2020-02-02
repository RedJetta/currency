<?php
//
$data = file_get_contents('http://www.nbrb.by/API/ExRates/Rates?Periodicity=0');
//var_dump($data);
$result = json_decode($data, true);
//debug($result);
$host = '127.0.0.1';
$db   = 'currency';
$user = 'root';
$pass = '5287363_Maxim';
$charset = 'utf8';
$col = 'utf8_unicode_ci';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
foreach ($result as $item) {
    $Cur_ID = $item['Cur_ID'];
    $Cur_Abbreviation = $item['Cur_Abbreviation'];
    $Cur_Scale = $item['Cur_Scale'];
    $Cur_Name = $item['Cur_Name'];
    $Cur_OfficialRate = (float) $item['Cur_OfficialRate'];
    $data2 = [
        'Cur_ID' => $Cur_ID,
        'Cur_Abbreviation' => $Cur_Abbreviation,
        'Cur_Scale'=>$Cur_Scale,
        'Cur_Name' => $Cur_Name,
        'Cur_OfficialRate' => $Cur_OfficialRate
    ];
    debug($data2);
    try {
        $sql = "INSERT INTO Currency (Cur_ID, Cur_Abbreviation, Cur_Scale, Cur_Name, Cur_OfficialRate) VALUES (:Cur_ID,:Cur_Abbreviation,:Cur_Scale,:Cur_Name, :Cur_OfficialRate)";
        $pdo->prepare($sql)->execute($data2);
    } catch (Exception $e) {
        var_dump($e->getMessage());exit();
    }

}





