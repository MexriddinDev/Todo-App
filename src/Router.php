<?php
namespace App;
class Router
{
    public $currentRoute;
    public function __construct(){
        $this->currentRoute =parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );

    }
    public function getResource(){
        if (isset(explode("/", $this->currentRoute)[2])){
            $respurceId =  (int)explode("/", $this->currentRoute)[2];
            return $respurceId ? $respurceId : FALSE;
        }
        return FALSE;
    }
    public function get($route, $callback){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $respurceId =  $this->getResource();
            $route=str_replace("{id}", $respurceId, $route);
            if ($route == $this->currentRoute){
                $callback($respurceId);
                exit();
            }
        }

    }
    public function post($route, $callback){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($route == $this->currentRoute){
                $callback();
                exit();
            }
        }
    }
    public function put($route, $callback){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_POST['_method'] == 'PUT'){
                $resourseId =  $this->getResource();
                $route=str_replace("{id}", $resourseId, $route);
                $callback($resourseId);
                exit();
            }
        }
    }
}
