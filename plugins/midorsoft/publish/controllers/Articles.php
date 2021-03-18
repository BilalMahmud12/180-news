<?php namespace Midorsoft\Publish\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Articles extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Midorsoft.Publish', 'articles-menu', 'articles-list');
    }

    public function shortLinker($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function formAfterCreate($model)
    {
        $link = $this->shortLinker(5);
        $model->update(['short_code' => $link]);
    }
}
