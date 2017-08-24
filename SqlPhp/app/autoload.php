<?php namespace Application;
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 2017. 03. 20.
 * Time: 21:02
 */


spl_autoload_register(function ($className){
    $filename = __DIR__ .  "/../" . str_replace('\\', '/', $className) . ".php";

    if (file_exists($filename)) {

        include($filename);
        if (class_exists($className)) {

            return TRUE;
        }
    }

    return FALSE;
});
