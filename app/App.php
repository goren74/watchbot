<?php

use Core\Config;
use Core\Database;


class App
{
    private static $_instance;
    private $db_instance;
    public $name_website = 'Watchbot';
    public $title = "Bienvenu sur Watchbot";


    public static function getInstance()
    {
        if(is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getTable($name) {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb(){
        //Lit config et gènére db
        $config = Config::getInstance(ROOT . '\config\Configurations.php');
        if(is_null($this->db_instance)) {
            $this->db_instance = new Database(
                $config->get('db_name'),
                $config->get('db_user'),
                $config->get('db_pass'),
                $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register(); //Permet de générer et lancer automatiquement l'autoloading de classe
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register(); //Permet de générer et lancer automatiquement l'autoloading de classe

        Core\Url\Router::prefix('cockpit','admin'); //Mot clé pour entrer dans le mode admin
        //Core\Url\Router::connect('','home/index');
    }

   
}