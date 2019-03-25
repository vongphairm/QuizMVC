<?php

$data=array();
flexible_function($data);
function flexible_function(&$data){
    $function='login';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        $function= $action;
    }
    echo $function($data);
}

function view(&$data){
 $data['employee_data']=viwe_employee();
 $data['page']="employee/view";
}
function add(&$data){
    $data['add_employee']=add_employee();
    $data['page']="employee/add";
    if($data['add_employee']){
        header ("location:index.php?action=view");
    }
}
function update(&$data){
   $data['update-employee']=update_employee();
$data['page']="employee/update";
}
function detial(&$data){
$data['update-employee']=update_employee();
 $data['page']="employee/detial";
 }
function edit(){
    $data['value']= edit_employee();
    if($data['value']){
        header ("location:index.php?action=view");
    }
    $data['page']="employee/index";   
}
function delete(&$data){
    $data['delete_employee']=delete_employee();
}
function login(&$data){
    $data['page']="login";
}
function register(&$data){
    $data['register']=register_add();
    if($data['register']){
        header ("location:index.php");
    }
    $data['page']="register";

}

function loginValidation(){
    login_employee();
}
function show(&$data){
    $data['page']="user/show";
    $data['user_data']=viwe_user();

   }
function UserAdd(&$data){
    $data['page']="user/create";
}
function Adduser(){
    $data['user_add']=register_add();
    if($data['user_add']){
        header ("location:index.php?action=show");
    }
}
function delete_users(&$data){
    $data['delete_user']=delete_user();
}
function updateUser(&$data){
    $data['update-user']=update_user();
     $data['page']="user/update";
 }
 
 function editUser(){
    $data['value']= edit_users();
    if($data['value']){
        header ("location:index.php?action=show");
    }
}


   

?>