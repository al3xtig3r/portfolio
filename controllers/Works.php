<?php namespace Al3xTig3r\Portfolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Works Back-end Controller
 */
class Works extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Al3xTig3r.Portfolio', 'portfolio', 'works');
    }
}
