<?php
class Eventos extends model {

    public function getAll(){
        $array = [];
        $sql = "SELECT * FROM evento";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function get($evento_id){

        $array = [];

        $sql = "SELECT * FROM evento WHERE evento_id = :evento_id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':evento_id', $evento_id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getByDate($date){
        $array = [];

        $sql = "SELECT * FROM evento WHERE data = :data";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':data', $date);
        $sql->execute();
     

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function add($tit, $ass, $dat){
        $sql = "INSERT INTO evento (titulo, assunto, data) VALUES (:titulo, :assunto, :data)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':titulo', $tit);
        $sql->bindValue(':assunto', $ass);
        $sql->bindValue(':data', $dat);
        $sql->execute();

        
        

        return true;
    }

    public function delete($evento_id){
        $sql = "DELETE FROM evento WHERE evento_id = :evento_id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':evento_id', $evento_id);
        $sql->execute();
    }

    public function edit($tit, $ass, $evento_id){
        $sql = "UPDATE evento SET titulo = :titulo, assunto = :assunto WHERE evento_id = :evento_id";
        $sql  = $this->db->prepare($sql);
        $sql->bindValue(':titulo', $tit);
        $sql->bindValue(':assunto', $ass);
        $sql->bindValue(':evento_id', $evento_id);
        $sql->execute();


    }
}