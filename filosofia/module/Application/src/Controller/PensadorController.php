<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class PensadorController extends AbstractActionController
{
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
        return new ViewModel();
    }

}
