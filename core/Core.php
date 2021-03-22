<?php 
class core{
    public function run(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = explode('/',$url);
            $class = array_shift($url);
            if(count($url) > 0){
                $method = array_shift($url);
                if(count($url) > 0){
                    $param = $url;
                } else{
                    $param = array();
                }
            } else{
                $method = 'index';
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