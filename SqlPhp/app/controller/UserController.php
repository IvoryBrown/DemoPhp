<?php namespace App\Controller;
use App\Repositories\AdvertisementRepository;
use App\Repositories\UserRepository;
use App\View\Template;

class UserController
{
    public static function getIndex(){

        $service = new UserRepository();

        $view = new Template("user-list.tpl");
        $view->users = $service->getAll();
        $view->render();
    }

    public static function getUserDetails($userId)
    {
        $userService = new UserRepository();
        $advService = new AdvertisementRepository();

        $view = new Template("user-details.tpl");
        $view->user=$userService->getById($userId);
        $view->userAdvertisements=$advService->getByUserId($userId);
        $view->render();
    }
}