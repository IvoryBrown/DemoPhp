<?php namespace App;

use App\Controller\AdvertisementController;
use App\Controller\HomeController;
use App\Controller\UserController;
use App\Repositories\Repository;
use App\View\Template;

/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 2017. 03. 20.
 * Time: 20:50
 */

class Application{

    // Constructor
    public function __construct (){
        //Basic setup for the view - set the path of the templates
        Template::init(__DIR__ . "/../resources/templates/");
        //Basic setup for the DB connection
        Repository::init("localhost",3306, "demo", "root", "");
    }

    /**
     * the name is misleading. it is not a really loop, likely it is part of the controllers
     * here is the routing logic
     */
    public function Run(){
        // Turn off error reporting
        //error_reporting(0);

        // Main try-catch
        try {
            // Get route (coming from .htaccess file
            $routeRequest = isset($_REQUEST['route']) ? '/' . $_REQUEST['route'] : "/";

            switch($routeRequest){
                case '/':{
                    HomeController::getIndex();
                    break;
                }
                case '/users':{
                    UserController::getIndex();
                    break;
                }
                case (preg_match('|\/users/(\d+)|', $routeRequest, $matches)?true:false):{
                    UserController::getUserDetails($matches[1]);
                    break;
                }
                case '/advs':{
                    AdvertisementController::getIndex();
                    break;
                }
                default:{
                    throw new \Exception("There is no controller for hantdle this route");
                }
            }

        } catch (\Throwable $e) {
            $view = new Template("error.tpl");
            $view->error = $e;
            $view->render();
        }

    }
}
