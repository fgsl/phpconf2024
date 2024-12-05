<?php
namespace Application\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;

class PensadorTable {
    private TableGatewayInterface $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function save(Pensador $pensador){
        $set = $pensador->toArray();
        $this->tableGateway->insert($set);
    }
}