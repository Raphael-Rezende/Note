<?php

Class Evento {

    private $pdo;
	//conexão com o banco 
	public function __construct() {
		 $this->pdo = new PDO("mysql:dbname=project_note;host=localhost", "root", "");
    }
    // Metodo auxiliar
	public function existeUser($evento_id) {

		$sql = "SELECT * FROM evento WHERE evento_id = :evento_id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':evento_id', $evento_id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		}else 

		   return false;
	}
	public function getInfo($evento_id) {

		$sql = "SELECT * FROM evento WHERE evento_id =  :evento_id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":evento_id", $evento_id);
		$sql->execute();

		if($sql->rowCount() > 0) {

			return $sql->fetch();

		}else {

			return array();
		}
	}	
    public function getData($data_hora){
        $sql = "SELECT * FROM evento WHERE data_hora = :data_hora";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':data_hora', $data_hora);
        $sql->execute();
        
       

			return $sql->fetch();

		
    }


// Creat a event:
 public function cadastrar($nome, $titulo){
  
		    $sql = "INSERT INTO evento (nome, titulo ) VALUES (:nome, :titulo)";
            $sql = $this->pdo->prepare($sql);
            //correspondente na instrução SQL que foi usada para preparar a instrução.\
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':titulo', $titulo);
           // $sql->bindValue(':data_hora', $data_hora);

            if ($sql->execute()){
                return true;
            }else
            {
                return false;
            }
 }

    public function read(){
        $sql = "SELECT * FROM evento";
		$sql = $this->pdo->query($sql);
			  // Verificando se tem algum evento, e se existir algum evento vai retornar todos eles
		if($sql->rowCount() > 0) {
				  // fetchAll pois estamos pegando uma lista
			return $sql->fetchAll();
				  // caso contrário retorna um array sem nenhum dado
		}else {
			return array();
		}
    }

    public function deletar($evento_id){

        $sql = "DELETE FROM `evento` WHERE `evento`.`evento_id` = :evento_id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':evento_id', $evento_id);
		$sql->execute();
			return true;
		
		
		
	}
	
	public function alterar($nome, $titulo, $evento_id){

		$sql = "UPDATE `evento` SET `titulo` = :titulo, `nome` = :nome WHERE `evento`.`evento_id` = :evento_id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':titulo', $titulo);
			$sql->bindValue(':evento_id', $evento_id);
			if ($sql->execute()){
                return true;
            }else
            {
                return false;
            }
           
           
	}
       
 
}

