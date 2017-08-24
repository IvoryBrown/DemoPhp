<?php  namespace App\View;
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 2017. 03. 20.
 * Time: 23:49
 */

class Template
{

    private static $template_dir = 'templates/';
    private $template_file;
    private $vars = array();

    public function __construct($template_file)
    {
        if (!file_exists(Template::$template_dir . $template_file)) {
            throw new \Exception('no template file ' . $template_file . ' present in directory ' . Template::$template_dir);
        }
        $this->template_file = $template_file;
    }

    public static function init($_template_dir){
        if ($_template_dir != null) {
            Template::$template_dir = $_template_dir;
            // Check here whether this directory really exists
            if (file_exists(Template::$template_dir) == false) {
                throw new \Exception("Directry does not exists");
            }
        }
    }

    public function render()
    {
        if (file_exists(Template::$template_dir . $this->template_file) == true && is_file(Template::$template_dir . $this->template_file)) {
            include Template::$template_dir . $this->template_file;
        }else{
            throw new \Exception("File not found or not a template file! (" . Template::$template_dir . $this->template_file .")");
        }
    }

    public function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }

    public function __get($name)
    {
        return $this->vars[$name];
    }

}