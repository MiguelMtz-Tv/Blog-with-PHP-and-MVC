<?php

class Controller{
    //clase controlador principal
    //se encargará de cargar las vistas y los modelos
    //cargar modelo
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    } 
    //cargar vista 
    public function loadView($view, $data = []){
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            die('La vista no existe');
        }
    }
}