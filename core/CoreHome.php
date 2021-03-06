<?php
class CoreHome{
    protected function LoadTemplateView($view,$param){
        extract($param);
        $view = $view;
        require 'views/template.php';
    }
    protected function LoadView($view,$param){
        extract($param);
        require 'views/'.$view.'.php';
    }
}