<?php 

class receitaController extends Controller {
    
    public function index(){}
 
    public function read(){
        $dados = array();
        
        $receita = new Receita();

        $dados['lista'] = $receita->getAll();
        

        

		 
		// enviar as informações para o view
        $this->loadTemplate('receita', $dados);
    }

    public function addRec(){
        $dados = array();

        $this->loadTemplate('addRec', $dados);
    }

    public function addRec_save(){
        if(!empty($_POST['valor_rec'])){
            $val_rec = floatval($_POST['valor_rec']);
            $dat_rec = $_POST['data_rec'];
            $des_rec = $_POST['descricao_rec'];
            $cat_rec = $_POST['categoria_rec'];
            
            $receita = new Receita();
            // Se adicionou mandar para pagina inicial:           
            if($receita->addRec($val_rec, $dat_rec, $des_rec, $cat_rec)) {                
                header("Location: ".BASE_URL.'receita/read?sucessfull');
            } else {
                header("Location: ".BASE_URL.'receita/addRec?error=exist');
            }
        }else {
            header("Location: ".BASE_URL.'receita/addRec?error=exist2');
        }
    }

    public function delRec($receita_id){
       

        if(!empty($receita_id)){
            //$despesas_id = $_POST['despesas_id'];

            $receita = new Receita();
            $receita->delete($receita_id);

            header("Location: ".BASE_URL.'receita/read?sucessfull');
        }else {

            header("Location: ".BASE_URL.'receita/read?error=201');
        }


        
    }
}