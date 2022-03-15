<?php

namespace AthenaPassport\Controller;

use AthenaBridge\Laminas\View\Model\ViewModel;

class AccountController extends PassportModuleController
{
    public function indexAction(): ViewModel
    {
        return $this -> newViewModel(['user' => $this -> user()]);
    }
}