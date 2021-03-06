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
            } else{
                $param = array();
            }
        }
        else{
            $class = 'homeController';
            $method = 'index';
            $param = array();
        }
        //$class tem que ser instaciada antes de coloca no call
        // $class = new $class();
        call_user_func_array(array($class,$method),$param);
    }
}