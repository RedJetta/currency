<?php


interface RepositoryInterface
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
     * @param $entity
     * @return mixed
     */
    public function saveOne($entity);

    /**
     * @param $entities
     * @return mixed
     */
    public function save($entities);

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