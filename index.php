<?php
$url = $_SERVER['REQUEST_URI'];
//Remove / at start
$url = substr_replace($url, '', 0, 1);
//Remove $_GET data
$url = str_replace('?'.$_SERVER['QUERY_STRING'], '', $url);

require_once __DIR__ .'/config/routes.php';

$params = array();

foreach($routes as $route){
    if(preg_match($route['pattern'], $url)){
        $params = $route;
        $params['get'] = $_SERVER['QUERY_STRING'];
        break;
    }
}

if(!empty($params)){
    //Load layout and content inside it
    session_start();
    
    if(isset($_POST) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        //Ajax call on post
        require_once 'request.php';
        
    }else{
        require_once 'translate.php';
        require_once 'layout/'.$params['layout'];
    }
}else{
    //Exception
    require_once 'exception/index.php';
}
