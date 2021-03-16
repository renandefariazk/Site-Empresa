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
                if($url > 0){
                    $param = $url;
                    // resolveria o problema do jeito abaixo
                    // $param = array($url);
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
// so vai funcionar o GET[url] com htaccess