<?php
class criarController extends CoreHome{
    public function index($param = array()){
        $this->LoadTemplateView('contaCriar',$param);
    }
}