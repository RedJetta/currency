<?php


require_once 'CurrencyRepositoryInterface.php';

/**
 * Class CurrencyRepository
 */
class CurrencyRepository implements CurrencyRepositoryInterface
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * CurrencyRepository constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @inheritDoc
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
        return $this->pdo->query('SELECT * FROM Currency')->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        return $this->pdo->query('SELECT * FROM Currency WHERE Cur_ID = ' . $id)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @inheritDoc
     */
    public function saveOne($currency)
    {
        
    }

    /**
     * @inheritDoc
     */
    public function save($currencies)
    {
        /** @var Currency $currency */
        foreach ($currencies as $currency) {
            $this->saveOne($currency);
        }
    }

    /**
     * @inheritDoc
     */
    public function removeOne($id)
    {
        // TODO: Implement removeOne() method.
    }

    /**
     * @inheritDoc
     */
    public function remove($ids)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @inheritDoc
     */
    public function updateOne($id)
    {
        // TODO: Implement updateOne() method.
    }

    /**
     * @inheritDoc
     */
    public function update($ids)
    {
        // TODO: Implement update() method.
    }
}