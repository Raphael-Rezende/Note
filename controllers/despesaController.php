<?php
class despesaController extends controller {

    public function index(){}

    public function read(){
        $dados = array();
        
        $finan = new Financas();

        $dados['lista'] = $finan->getAll_despesa();
        

        

		
		// enviar as informações para o view
        $this->loadTemplate('despesa', $dados);
    }

    public function addDes(){
        $dados = array();

        $this->loadTemplate('addDes', $dados);
    }

    public function addDes_save(){
        if(!empty($_POST['valor'])){ 
            $val = floatval($_POST['valor']);
            $des = $_POST['descricao'];
            $dat = $_POST['data'];
            $cat = $_POST['categoria'];
            
            $finan = new Financas();
            // Se adicionou mandar para pagina inicial:
            if($finan->addDes($val, $dat, $des, $cat)) {
                
                header("Location: ".BASE_URL.'despesa/read');
            } else {
                header("Location: ".BASE_URL.'despesa/addDes?error=exist');
            }
        }else {
            header("Location: ".BASE_URL.'despesa/addDes?error=exist2');
        }
    }

    public function delDes($despesas_id){
       

        if(!empty($despesas_id)){
            //$despesas_id = $_POST['despesas_id'];

            $finan = new Financas();
            $finan->delete($despesas_id);

            header("Location: ".BASE_URL.'despesa/read?sucessfull');
        }else {

            header("Location: ".BASE_URL.'despesa/read?error=201');
        }


        
    }
   
   
}