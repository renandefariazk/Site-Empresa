<?php
class homeController extends CoreHome{
    public function index($param){
        $this->LoadTemplateView('home',$param);
    }
}