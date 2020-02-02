//
//function getPageByUrl ($url)
//{
//    function debug($data)
//    {
//        echo '<pre>' . print_r($data, 1) . '</pre>';
//    }
//
//    //Инициализируем сеанс
//    $curl = curl_init();
//
//    //Указываем адрес страницы
//    curl_setopt($curl, CURLOPT_URL, $url);
//
//    //Ответ сервера сохранять в переменную, а не на экран
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//    //Переходить по редиректам
//    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
//
//    //Выполняем запрос:
//    $result = curl_exec($curl);
//
//    //Отлавливаем ошибки подключения
//    if ($result === false) {			echo "Ошибка CURL: " . curl_error($curl);
//        return false;
//    } else {
//        debug($result);
//        var_dump($result);
//        $res1 = substr($result,1, -1);
//        $res=explode(',', $res1);
//        debug($res);
//
//    }
//    curl_close($curl);
//}
//
//echo getPageByUrl('http://www.nbrb.by/API/ExRates/Rates/USD?ParamMode=2');




//debug($result); '<br>';
////var_dump($result);
////debug($data);
////var_dump($data);
//echo $result[0][Cur_Name] . ' - ' . $result[0][Cur_OfficialRate] . ' BYR';
//var_dump($result);
//echo $id ='<br>' . $result["Cur_Name"] . '-' . $result["Cur_OfficialRate"];




//$abbr = $pdo->query('SELECT Cur_Abbreviation FROM Currency')->fetchAll(PDO::FETCH_COLUMN);
//debug($abbr);
//$rate = $pdo->query('SELECT Cur_OfficialRate FROM Currency')->fetchAll(PDO::FETCH_COLUMN);
//debug($rate);
