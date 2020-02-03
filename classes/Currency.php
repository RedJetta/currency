<?php


class Currency
{
    public $Cur_ID;
    public $Date;
    public $Cur_Abbreviation;
    public $Cur_Scale;
    public $Cur_Name;
    public $Cur_OfficialRate;


    /**
     * @param $pdo
     * @return mixed
     */
    public function getCurAbbreviation($pdo)
    {
        $this->Cur_Abbreviation = $pdo->query('SELECT Cur_Abbreviation FROM Currency')->fetchAll(PDO::FETCH_COLUMN);
        return $this->Cur_Abbreviation;
    }
}