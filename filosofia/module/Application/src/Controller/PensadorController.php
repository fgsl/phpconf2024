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
        $gravou = false;
        $mensagem = 'dados inválidos';
        if ($pensador->isValid()) {
            $gravou = (bool) $this->pensadorTable->save($pensador);
            $mensagem = $gravou ? 'Gravado com sucesso!' : 'Falha na gravação';
        }
        return new ViewModel([
            'mensagem' => $mensagem
        ]);
    }

    public function deleteAction(): ViewModel
    {
        $codigo = (int) $this->params('codigo',0);        
        $this->pensadorTable->delete($codigo);
        return new ViewModel();
    }

}
