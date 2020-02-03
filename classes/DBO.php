<?php


class DBO
{
    public $host = '127.0.0.1';
    public $db   = 'currency';
    public $user = 'root';
    public $pass = '5287363_Maxim';
    public $charset = 'utf8';

    public function DatabaseConnection()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        return $dsn;
    }

    public function DBOOptions()
    {
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return $opt;
    }

    public function createPDO(){
        $pdo = new PDO($this->DatabaseConnection(), $this->user, $this->pass, $this->DBOOptions());
        return $pdo;
    }

    public function InsertCurrency($decodedData){
        foreach ($decodedData as $item) {
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
                $this->createPDO()->prepare($sql)->execute($data2);
            } catch (Exception $e) {
                var_dump($e->getMessage());exit();
            }

        }

    }

}
