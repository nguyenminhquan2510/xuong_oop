<?php
namespace Ductong\FpolyBaseWeb3014\Models;

use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Commons\Model;

class Home extends Model{
    protected string $tableName = 'content';
    public function new_TheThao()
    {
        return $this->queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 4')
        ->orderBy('id','desc')
        ->fetchAllAssociative();
    }
    public function paginate_TheThao($page = 1, $perPage = 3)
    {
        $queryBuilder=clone($this->queryBuilder);
        $totalPage = ceil($this->count_tt() / $perPage);
        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 4')
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('id','desc')
        ->fetchAllAssociative();


        return [$data, $totalPage];
    }
    public function new_SucKhoe()
    {
        return $this->queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 11')
        ->orderBy('id','desc')
        ->fetchAllAssociative();
    }
    public function paginate_SucKhoe($page = 1, $perPage = 3)
    {
        $queryBuilder=clone($this->queryBuilder);
        $totalPage = ceil($this->count_sk() / $perPage);
        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 11')
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('id','desc')
        ->fetchAllAssociative();


        return [$data, $totalPage];
    }
    public function new_TrongNuoc()
    {
        return $this->queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 1')
        ->orderBy('id','desc')
        ->fetchAllAssociative();
    }
    public function paginate_TrongNuoc($page = 1, $perPage = 3)
    {
        $queryBuilder=clone($this->queryBuilder);
        $totalPage = ceil($this->count_tn() / $perPage);
        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 1')
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('id','desc')
        ->fetchAllAssociative();
        // Helper::debug($data);

        return [$data, $totalPage];
    }
    public function new_NgoaiNuoc()
    {
        return $this->queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 2')
        ->orderBy('id','desc')
        ->fetchAllAssociative();
    }
    public function paginate_NgoaiNuoc($page = 1, $perPage = 3)
    {
        $queryBuilder=clone($this->queryBuilder);
        $totalPage = ceil($this->count_nn() / $perPage);
        $offset = $perPage * ($page - 1);
        // Helper::debug($this->count_idDirectory($idDirectory));
        $data = $queryBuilder
        ->select('*')
        ->from('content')
        ->where('idDirectory = 2')
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('id','desc')
        ->fetchAllAssociative();


        return [$data, $totalPage];
    }
    public function all_idDirectory($idDirectory)
    {
        return $this->queryBuilder
        ->select('c.*')
        ->from($this->tableName, 'c')
        ->where('c.idDirectory = ?')
        ->setParameter(0, $idDirectory)
        ->fetchAllAssociative();
    }
       public function findByID_join_connent($id)
    {
        return $this->queryBuilder
            ->select('c.*', 'd.name')
            ->from($this->tableName, 'c')
            ->innerJoin('c', 'directory', 'd', 'c.idDirectory = d.idDirectory')
            ->where('c.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}