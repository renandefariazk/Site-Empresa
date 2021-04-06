<?php
class criarController extends CoreHome{
    public function index($param = array()){
        $this->LoadTemplateView('contaCriar',$param);
    }
    public function insert($param = array()){
        require '../model/criarModel.php';
        //talvez receber com $_POST['nome'];
        insertDB($param['nome'],$param['password'],$param['cpf'],$param['email'],$param['internet']);
        // header("Location:");
    }
}