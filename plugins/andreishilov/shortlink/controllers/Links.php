<?php

namespace AndreiShilov\ShortLink\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Links extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = ['andreishilov.shortlink.edit'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AndreiShilov.ShortLink', 'shortlink');
    }
}
