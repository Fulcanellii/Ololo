<?php namespace Arr\MainContent\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Main extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Arr.MainContent', 'main-menu-item');
    }
}
