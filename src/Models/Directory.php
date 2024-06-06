<?php
namespace Ductong\FpolyBaseWeb3014\Models;

use Ductong\FpolyBaseWeb3014\Commons\Model;

class Directory extends Model{
    protected string $tableName = 'directory';
    public function all_directory()
    {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->orderBy('idDirectory','desc')
        ->fetchAllAssociative();
    }
    public function findByID_directory($idDirectory)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('idDirectory = ?')
            ->setParameter(0, $idDirectory)
            ->fetchAssociative();
    }
    public function update($idDirectory, array $data)
    {
        if (!empty($data)) {
            $query = $this->queryBuilder->update($this->tableName);

            $index = 0;
            foreach($data as $key => $value) {
                $query->set($key, '?')->setParameter($index, $value);

                ++$index;
            }

            $query->where('idDirectory = ?')
                ->setParameter(count($data), $idDirectory)
                ->executeQuery();

            return true;
        }
        
        return false;
    }

    public function delete($idDirectory)
    {        
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('idDirectory = ?')
            ->setParameter(0, $idDirectory)
            ->executeQuery();
    }
}