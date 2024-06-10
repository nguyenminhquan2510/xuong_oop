<?php

namespace Ductong\FpolyBaseWeb3014\Models;

use Ductong\FpolyBaseWeb3014\Commons\Model;

class Content extends Model
{
    protected string $tableName = 'content';

    public function all_join_connent()
    {
        return $this->queryBuilder
            ->select('c.*', 'd.name')
            ->from($this->tableName, 'c')
            ->innerJoin('c', 'directory', 'd', 'c.idDirectory = d.idDirectory')
            ->orderBy('c.id', 'desc')
            ->fetchAllAssociative();
    }
    public function name_directory()
    {
        return $this->queryBuilder
            ->select('*')
            ->from('directory')
            ->fetchAllAssociative();
    }
    public function findByID_join_connent($id)
    {
        return $this->queryBuilder
            ->select('c.*', 'd.name')
            ->from($this->tableName, 'c')
            ->innerJoin('c', 'directory', 'd', 'c.idDirectory = d.idDirectory')
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
    public function paginate_Directory($page = 1, $perPage = 5)
    {
        $queryBuilder=clone($this->queryBuilder);
        $totalPage = ceil($this->count() / $perPage);
        $offset = $perPage * ($page - 1);

        $data = $queryBuilder

        ->select('c.*', 'd.name')
        ->from($this->tableName, 'c')
        ->innerJoin('c', 'directory', 'd', 'c.idDirectory = d.idDirectory')
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('c.id', 'desc')
        ->fetchAllAssociative();


        return [$data, $totalPage];
    }
}
