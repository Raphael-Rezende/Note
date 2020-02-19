<?php 
class Receita extends model {
    

    public function getAll(){
        $sql = "SELECT * FROM receitas";
        $sql = $this->db->query($sql);
         
        $array = 0;
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function get($receita_id){
        $sql = "SELECT * FROM receitas WHERE receita_id = :receita_id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':receita_id', $receita_id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function addRec($val_rec, $dat_rec, $des_rec, $cat_rec){
        
        try{
            $sql = "INSERT INTO receitas (valor_rec, data_rec, descricao_rec, categoria_rec) VALUES (:valor_rec, :data_rec, :descricao_rec, :categoria_rec)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':valor_rec', $val_rec);
            $sql->bindValue(':data_rec', $dat_rec);
            $sql->bindValue(':descricao_rec', $des_rec);
            $sql->bindValue(':categoria_rec', $cat_rec);
            $sql->execute();
            
            return true;
        }catch(Exception $e){
            echo 'erro: ' . $e->getMessage();
            return false;
        }
        
        
    }

    public function delete($receita_id){
        $sql = "DELETE FROM receitas WHERE receita_id = :receita_id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':receita_id', $receita_id);
        $sql->execute();
    }

    
}