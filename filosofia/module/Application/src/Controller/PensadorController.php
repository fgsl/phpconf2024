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
        return new ViewModel();
    }

    public function editAction(): ViewModel
    {
        return new ViewModel();
    }

    public function saveAction(): ViewModel
    {
        $pensador = new Pensador($_POST);
        $this->pensadorTable->save($pensador);
        return new ViewModel();
    }

}
