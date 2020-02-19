<?php 
class Financas extends model{

    public function getAll_despesa(){
        $sql = "SELECT * FROM despesas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        

        return $array;
    }

    public function get($despesas_id){
        $sql = "SELECT * FROM despesas WHERE despesas_id = :despesas_id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':despesas_id', $despesas_id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function addDes($val, $dat, $des, $cat){
        $sql = "INSERT INTO despesas (valor, data, descricao, categoria) VALUES (:valor, :data, :descricao, :categoria)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':valor', $val);
        $sql->bindValue(':data', $dat);
        $sql->bindValue(':descricao', $des);
        $sql->bindValue(':categoria', $cat);
        $sql->execute();

        
        

        return true;
    }

    public function delete($despesas_id){
        $sql = "DELETE FROM despesas WHERE despesas_id = :despesas_id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':despesas_id', $despesas_id);
        $sql->execute();
    }



   
   
    
}
