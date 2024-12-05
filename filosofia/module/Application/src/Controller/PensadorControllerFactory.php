<?php
namespace Application\Controller;

use Application\Model\PensadorTable;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;


class PensadorControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $adapter = $container->get('DbAdapter');
        $tableGateway = new TableGateway('pensadores',$adapter);
        $pensadorTable = new PensadorTable($tableGateway);
        return new PensadorController($pensadorTable);
    }
}