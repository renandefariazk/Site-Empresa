<?php 
class core{
    public function run(){
        if(isset($_GET['url']) && empty($_GET['url'])){
            //$url = '/'.$_GET['url'];
            $url = $_GET['url'];
            $url = explode('/',$url);
            $class = array_unshift($url);
            if($url > 0){
                $method = array_unshift($url);
            } else{
                $method = 'index';
                $param = array();
            }
            if($url > 0){
                $param = $url;
                // resolveria o problema do jeito abaixo
                // $param = array($url);
            } else{
                $param = array();
            }
        }
        else{
            $class = 'homeController';
            $method = 'index';
            $param = array();
        }
        $a = new $class();
        call_user_func_array(array($a,$method),$param);
    }
}