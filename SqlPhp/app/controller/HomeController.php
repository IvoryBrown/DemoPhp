<?php namespace App\Controller;
use App\View\Template;


class HomeController
{
    public static function getIndex(){
        $view = new Template("index.tpl");
        $view->render();
    }
}