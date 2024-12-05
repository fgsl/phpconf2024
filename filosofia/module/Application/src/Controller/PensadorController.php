<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Pensador;
use Application\Model\PensadorTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class PensadorController extends AbstractActionController
{
    private PensadorTable $pensadorTable;

    public function __construct(PensadorTable $pensadorTable)
    {
        $this->pensadorTable = $pensadorTable;
    }

    public function indexAction()
    {
        $pensadores = $this->pensadorTable->getAll();
        return new ViewModel([
            'pensadores' => $pensadores
        ]);
    }

    public function editAction(): ViewModel
    {
        $codigo = (int) $this->params('codigo',0);
        $pensador = $this->pensadorTable->getByCodigo($codigo);
        return new ViewModel([
            'pensador' => $pensador
        ]);
    }

    public function saveAction(): ViewModel
    {
        $pensador = new Pensador($_POST);
        $this->pensadorTable->save($pensador);
        return new ViewModel();
    }

    public function deleteAction(): ViewModel
    {
        $codigo = (int) $this->params('codigo',0);        
        $this->pensadorTable->delete($codigo);
        return new ViewModel();
    }

}
