<?php namespace App\Controller;
use App\Repositories\AdvertisementRepository;
use App\View\Template;


class AdvertisementController
{
    public static function getIndex(){
        $service = new AdvertisementRepository();
        $view = new Template("advertisement-list.tpl");
        $view->advertisements = $service->getAll();
        $view->render();
    }
}