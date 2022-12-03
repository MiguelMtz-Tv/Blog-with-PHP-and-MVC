<?php

class ModelNoticia {
    private $db;

    public function __construct(){
        $this->db =  new Base;
    }

    public function getNews(){
        $this->db->query("SELECT * FROM vw_noticia");
        $result = $this->db->registros();
        return $result;
    }

    public function getOneNew($url){
        $this->db->query("SELECT * FROM vw_noticia WHERE not_url = :url");
        $this->db->bind(':url', $url);

        $fila = $this->db->registro();

        return $fila;

    }

    public function getOneNewAdmin($id){
        $this->db->query("SELECT * FROM noticias WHERE idNoticia = :id");
        $this->db->bind(':id', $id);

        $fila = $this->db->registro();

        return $fila;

    }

    public function addNew($datos){
        $this->db->query('INSERT INTO noticias (idNoticia, titulo, descripcion, encabezado, fkusuario, fecha, fkEtiqueta, fotoPortada)
                         VALUES (:idNoticia, :titulo, :descripcion, :encabezado, :fkusuario, default, :fkEtiqueta, :fotoPortada)');
        
        $this->db->bind(':idNoticia', null);
        $this->db->bind(':titulo', $datos['titulo']);
        $this->db->bind(':descripcion', $datos['descripcion']);
        $this->db->bind(':encabezado', $datos['encabezado']);
        $this->db->bind(':fkusuario', 1);
        $this->db->bind(':fkEtiqueta', 1);
        $this->db->bind(':fotoPortada', $datos['fotoPortada']);
        

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateNew($datos){
        $this->db->query('UPDATE noticias SET titulo = :titulo, descripcion = :descripcion, encabezado= :encabezado WHERE idNoticia = :idNoticia');
        
        $this->db->bind(':idNoticia', $datos['idNoticia']);
        $this->db->bind(':titulo', $datos['titulo']);
        $this->db->bind(':descripcion', $datos['descripcion']);
        $this->db->bind(':encabezado', $datos['encabezado']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteNew($id){
        $this->db->query('DELETE FROM noticias  WHERE idNoticia=:idNoticia');
                         
        $this->db->bind(':idNoticia', $id);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }
}