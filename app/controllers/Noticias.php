<?php 

class Noticias extends Controller{
    public $model = 'ModelNoticia';
    public $currentParam;
    
    public function __construct(){
        $url = $this->getUrl();
        $this->currentParam = $url ? array_values($url) : [];
        $this->noticiaModel = $this -> model($this->model);
    }

    public function index(){
        $news = $this->noticiaModel->getNews();
        $data = [
            'news' => $news
        ]; 
        $this->loadView('main', $data);
    }

    public function New(){
        $new = $this->noticiaModel->getOneNew($this->currentParam[2]);
        $data = [
            'new' => $new
        ]; 
        $this->loadView('new', $data);
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