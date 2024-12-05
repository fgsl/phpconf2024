<?php
namespace Application\Model;

use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\ResultSet\ResultSetInterface;
use Laminas\Db\TableGateway\TableGatewayInterface;

class PensadorTable {
    private TableGatewayInterface $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function save(Pensador $pensador){
        $set = $pensador->toArray();
        if ($pensador->codigo > 0){
            return $this->tableGateway->update($set,['codigo' => $pensador->codigo]);
        }
        return $this->tableGateway->insert($set);
    }

    public function getAll(): ResultSetInterface
    {
        return $this->tableGateway->select();
    }

    public function getByCodigo(int $codigo): Pensador {
        $resultSet = $this->tableGateway->select(['codigo'=>$codigo]);
        $row = $resultSet->current();
        if ($row == null){
            return new Pensador();
        }
        return new Pensador($row->getArrayCopy());
    }

    public function delete(int $codigo): int{
        return $this->tableGateway->delete(['codigo'=>$codigo]);
    }
}