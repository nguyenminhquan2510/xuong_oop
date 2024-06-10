<?php

namespace Ductong\FpolyBaseWeb3014\Commons;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

class Model
{
    protected Connection|null $conn;
    protected QueryBuilder $queryBuilder;
    protected string $tableName;
    protected string $tableName2;


    public function __construct()
    {
        $connectionParams = [
            'dbname'    => $_ENV['DB_NAME'],
            'user'      => $_ENV['DB_USERNAME'],
            'password'  => $_ENV['DB_PASSWORD'],
            'host'      => $_ENV['DB_HOST'],
            'port'      => $_ENV['DB_PORT'],
            'driver'    => $_ENV['DB_DRIVER'],
        ];

        $this->conn = DriverManager::getConnection($connectionParams);

        $this->queryBuilder = $this->conn->createQueryBuilder();
    }

    // CRUD
    public function all()
    {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->orderBy('id','desc')
        ->fetchAllAssociative();
    }

    public function count()
    {
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tableName")
        ->from($this->tableName)
        ->fetchOne();
    }
    public function count_nn()
    {
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tableName")
        ->where("idDirectory =2")
        ->from($this->tableName)
        ->fetchOne();
    }
    public function count_tt()
    {
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tableName")
        ->where("idDirectory =4")
        ->from($this->tableName)
        ->fetchOne();
    }  public function count_tn()
    {
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tableName")
        ->where("idDirectory =1")
        ->from($this->tableName)
        ->fetchOne();
    }  public function count_sk()
    {
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tableName")
        ->where("idDirectory =11")
        ->from($this->tableName)
        ->fetchOne();
    }public function count_ts()
    {
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tableName")
        ->where("idDirectory =5")
        ->from($this->tableName)
        ->fetchOne();
    }

    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder=clone($this->queryBuilder);
        $totalPage = ceil($this->count() / $perPage);
        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('id', 'desc')
        ->fetchAllAssociative();


        return [$data, $totalPage];
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }

    public function insert(array $data)
    {
        return $this->conn->insert($this->tableName,$data);
    }

    public function update($id, array $data)
    {
        return $this->conn->update($this->tableName,$data,['id'=>$id]);
    }

    public function delete($id)
    {        
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->executeQuery();
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
