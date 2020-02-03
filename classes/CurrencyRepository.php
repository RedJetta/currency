<?php

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
    }

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @inheritDoc
     */
    public function saveOne($currency)
    {
        // TODO: Implement saveOne() method.
    }

    /**
     * @inheritDoc
     */
    public function save($currencies)
    {
        // TODO: Implement save() method.
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