<?php

class eventosController extends controller {
    public function index(){} 


    public function read(){
        $dados = array();
      
        $eventos = new Eventos();
        if (isset($_GET['data'])){
          
            $dados['lista'] = $eventos->getByDate($_GET['data']);

        }else{
            $dados['lista'] = $eventos->getAll();
        }
        

		
		// enviar as informações para o view

        $this->loadTemplate('read', $dados);
    }

    public function add() {
        $dados = array();

        $this->loadTemplate('add', $dados);
    }

    public function add_save(){
       if(!empty($_POST['titulo'])){
           $tit = $_POST['titulo'];
           $ass = $_POST['assunto'];
           $dat = $_POST['data'];
           
           $eventos = new Eventos();
           // Se adicionou mandar para pagina inicial:
           if($eventos->add($tit, $ass, $dat)) {
               
               header("Location: ".BASE_URL);
           } else {
               header("Location: ".BASE_URL.'eventos/add?error=exist');
           }
       }else {
           header("Location: ".BASE_URL.'eventos/add?error=exist');
       }
        
    }

    public function edit($evento_id){

        $dados = array();

        //Pegando as informações e editar:
        if(!empty($evento_id)){
            $eventos = new Eventos();

            // Pegando as novas informações e editar
            if(!empty($_POST['titulo']) && !empty($_POST['assunto'])) {
                $tit = $_POST['titulo'];
                $ass = $_POST['assunto'];

                $eventos->edit($tit, $ass, $evento_id);
            }else {

               $dados['info'] = $eventos->get($evento_id);

               if(isset($dados['info']['evento_id'])) {
                  $this->loadTemplate('edit', $dados);
                  exit;
                }
            }
        }
        
        header("Location: ".BASE_URL.'eventos/read');
    }

    public function del($evento_id){
        if(!empty($evento_id)){

            $eventos = new Eventos();
            $eventos->delete($evento_id);

            header("Location: ".BASE_URL.'eventos/read?sucessfull');
        }else {

            header("Location: ".BASE_URL.'eventos/read?error=201');
        }

    }
}

?>