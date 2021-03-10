<?php
class homeController extends CoreHome{
    public function index($param = array()){
        $this->LoadTemplateView('home',$param);
    }
}