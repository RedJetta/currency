<?php

require_once 'RepositoryInterface.php';

/**
 * Interface CurrencyRepositoryInterface
 */
interface CurrencyRepositoryInterface extends RepositoryInterface
{
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param int $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param Currency $currency
     * @return mixed
     */
    public function saveOne($currency);

    /**
     * @param Currency[] $currencies
     * @return mixed
     */
    public function save($currencies);

    /**
     * @param int $id
     * @return mixed
     */
    public function removeOne($id);

    /**
     * @param int[] $ids
     * @return mixed
     */
    public function remove($ids);

    /**
     * @param int $id
     * @return mixed
     */
    public function updateOne($id);

    /**
     * @param int[] $ids
     * @return mixed
     */
    public function update($ids);
}