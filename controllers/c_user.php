<?php
$data=array();
flexible_function($data);
function flexible_function(&$data){
    $function='views';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        $function= $action;
    }
    echo $function($data);
}

   





?>