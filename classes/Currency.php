<?php


class Currency
{
    private $Cur_ID;
    private $Date;
    private $Cur_Abbreviation;
    private $Cur_Scale;
    private $Cur_Name;
    private $Cur_OfficialRate;

//    /**
//     * @param $pdo
//     * @return mixed
//     */
//    public function getCurAbbreviation($pdo)
//    {
//        $this->Cur_Abbreviation = $pdo->query('SELECT Cur_Abbreviation FROM Currency')->fetchAll(PDO::FETCH_COLUMN);
//        return $this->Cur_Abbreviation;
//    }
//
//    public function getAll($pdo)
//    {
//
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCurOfficialRate($pdo)
//    {
//        $this->Cur_Abbreviation = $pdo->query('SELECT Cur_OfficialRate FROM Currency')->fetchAll(PDO::FETCH_COLUMN);
//        return $this->Cur_OfficialRate;
//    }

    /**
     * @return mixed
     */
    public function getCurID()
    {
        return $this->Cur_ID;
    }

    /**
     * @param mixed $Cur_ID
     * @return Currency
     */
    public function setCurID($Cur_ID)
    {
        $this->Cur_ID = $Cur_ID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     * @return Currency
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurScale()
    {
        return $this->Cur_Scale;
    }

    /**
     * @param mixed $Cur_Scale
     * @return Currency
     */
    public function setCurScale($Cur_Scale)
    {
        $this->Cur_Scale = $Cur_Scale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurName()
    {
        return $this->Cur_Name;
    }

    /**
     * @param mixed $Cur_Name
     * @return Currency
     */
    public function setCurName($Cur_Name)
    {
        $this->Cur_Name = $Cur_Name;
        return $this;
    }

}
//$q = intval($_GET['q']);
//
//
//mysqli_select_db($con, "ajax_demo");
//$sql = "SELECT * FROM Currency WHERE Cur_Abbreviation = '" . $q . "'";
//$result = mysqli_query($con, $sql);
//
//echo "<table>
//<tr>
//<th>idCurrency</th>
//<th>Cur_ID</th>
//<th>Date</th>
//<th>Cur_Abbreviation</th>
//<th>Cur_Scale</th>
//<th>Cur_Name</th>
//<th>Cur_OfficialRate</th>
//</tr>";
//while ($row = mysqli_fetch_array($result)) {
//    echo "<tr>";
//    echo "<td>" . $row['idCurrency'] . "</td>";
//    echo "<td>" . $row['Cur_ID'] . "</td>";
//    echo "<td>" . $row['Date'] . "</td>";
//    echo "<td>" . $row['Cur_Abbreviation'] . "</td>";
//    echo "<td>" . $row['Cur_Scale'] . "</td>";
//    echo "<td>" . $row['Cur_Name'] . "</td>";
//    echo "<td>" . $row['Cur_OfficialRate'] . "</td>";
//    echo "</tr>";
//}
//echo "</table>";


