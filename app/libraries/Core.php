<?php
/* 
    mapear la url ingresada en el navegador
    1- controlador
    2- metodo
    3- Parametro

    ejemplo: /articulo(controlador)/actualizar(metodo)/(parametro[id])4
*/

class Core{
    protected $currentController = 'noticias';
    protected $currentMethod = 'index';
    protected $currentParam = [];

    public function __construct(){
        $url = $this->getUrl();
        if(isset($url[0])){
            if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                //si existe se setea como controlador por defecto
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }
         //Comprobamos si hay una url para cargar
        require_once '../app/controllers/'.$this -> currentController.'.php';
        $this -> currentController = new $this -> currentController;
        
        //revisamos si la segunda parte de la url (el metodo) existe
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]); 
            }
        }

        //seteamos el parametro
        $this->currentParam = $url ? array_values($url) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->currentParam);
    }

    public function getUrl(){
        //echo $_GET['url'];
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL); 
            $url = explode('/', $url);
            return $url;
        }
    }
}