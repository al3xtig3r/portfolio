<?php namespace Al3xTig3r\Portfolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Services Back-end Controller
 */
class Services extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend\Behaviors\RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relations.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Al3xTig3r.Portfolio', 'portfolio', 'services');
    }
}
