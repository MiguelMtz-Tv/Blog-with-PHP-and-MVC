<?php

class Admin extends Controller{
    public $model = 'ModelNoticia';
    public function __construct()
    {
        $url = $this->getUrl();
        $this->currentParam = $url ? array_values($url) : [];
        $this->noticiaModel = $this -> model($this->model);
    }

    public function index(){
        something();
        $news = $this->noticiaModel->getNews();
        $data = [
            'news' => $news
        ]; 
        $this->loadView('admin', $data);
    }

    //editar noticia
    public function editNew(){
        $new = $this->noticiaModel->getOneNewAdmin($this->currentParam[2]);
        $data = [
            'new' => $new
        ]; 
        $this->loadView('adminEdit', $data);
    }
    
    //crear noticia 
    public function createNew(){
        $this->loadView('adminUpload', null);
    }

    //publicar noticia
    public function postNew(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //creamos un nuevo nombre para la imagen
            $fotoPortada = $_FILES['fotoPortada'];
            $time = time();
            $foto_nombre = $time.'-'.$fotoPortada['name']; 

            //movemos la imagen a una carpeta
            $foto_tmp_nombre = $fotoPortada['tmp_name'];
            $foto_folder = 'images/' . $foto_nombre;
            move_uploaded_file($foto_tmp_nombre, $foto_folder);

            $datos = [
                'idNoticia' => $_POST['idNoticia'],
                'titulo' => trim($_POST['titulo']),
                'descripcion' => trim($_POST['descripcion']),
                'encabezado' => trim($_POST['encabezado']),
                'fotoPortada' => trim($foto_nombre),
                'foto'  => $fotoPortada
            ];
    
            if($this->noticiaModel->addNew($datos)){
                header('Location:'.RUTA_URL.'/admin');
            }
            else{
                die('Algo salio mal');
            }
        }
    }

    //actualizar una noticia
    public function refreshNew(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [
                'idNoticia' => $_POST['idNoticia'],
                'titulo' => trim($_POST['titulo']),
                'descripcion' => trim($_POST['descripcion']),
                'encabezado' => trim($_POST['encabezado']),
            ];
    
            if($this->noticiaModel->updateNew($datos)){
                header('Location:'.RUTA_URL.'/admin');
            }
            else{
                die('Algo salio mal');
            }
        }
    }

    //borrar noticia
    public function delete(){
        $new = $this->noticiaModel->deleteNew($this->currentParam[2]);
        if($new){
            header('Location:'.RUTA_URL.'/admin');
        }
        else{
            die('Algo salio mal');
        }
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