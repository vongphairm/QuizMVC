<?php
function viwe_employee(){
    $query="SELECT * FROM employee";
    include "connection.php";
    $result=mysqli_query($con,$query);
    $row=[];
    if(mysqli_num_rows($result)>0){
            while ($getToArray=mysqli_fetch_array($result)){
                $row[]=$getToArray;
            }
        return $row;
    }
   
}

function add_employee(){
    include_once "connection.php";
    if(isset($_POST['btn-add'])){ 
        $fname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $age=$_POST['age'];
        $salary=$_POST['salary'];
        $email=$_POST['email'];
        $title=$_POST['title'];
        $perk=$_POST['perk'];
        $query="INSERT INTO employee(firstname,lastname,age,salary,email,title,perks)
         VALUES ('$fname','$lastname','$age','$salary','$email','$title','$perk')";
        $result=mysqli_query($con,$query);
        return $result;
    }}
    function update_employee(){      
        include_once ("connection.php");
        $query="SELECT * FROM employee WHERE  id=".$_GET['id'];
        $result=mysqli_query($con,$query);
        return $result; 
    }
  function edit_employee(){ 
    include "connection.php";
    $result="";
       $fname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $age=$_POST['age'];
       $salary=$_POST['salary'];
       $email=$_POST['email'];
        $title=$_POST['title'];
        $perk=$_POST['perk'];
       $sql="UPDATE  employee SET  firstname='$fname', lastname='$lastname',age=$age,salary=$salary,email='$email',title='$title',perks='$perk' where id=".$_GET['id'];
       $result=mysqli_query($con,$sql);
       return $result;
}
    function delete_employee(){
        include_once "connection.php";
        $query="DELETE FROM employee where id=".$_GET['id'];
        $result=mysqli_query($con,$query);
        if($result){
          header('location:index.php?action=view');
        }else{
            echo "erro";
        }
    }
function login_employee(){
include "connection.php";

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT  count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location:index.php?action=view');
        }else{
            header('Location:index.php?action=login');
        }

    }

}
function register_add(){
    if(isset($_POST['reg'])){
        include "connection.php";
        $fname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password'];
        $query="INSERT INTO users(username,name,password)
         VALUES ('$fname','$lastname',md5('$password'))";
        $result=mysqli_query($con,$query);
        return $result;
    
    }
}
function viwe_user(){
    $query="SELECT * FROM users";
    include "connection.php";
    $result=mysqli_query($con,$query);
    $row=[];
    if(mysqli_num_rows($result)>0){
            while ($getToArray=mysqli_fetch_array($result)){
                $row[]=$getToArray;
            }
        return $row;
    }
   
}  

function delete_user(){
    include_once "connection.php";
    $query="DELETE FROM users where id=".$_GET['id'];
    $result=mysqli_query($con,$query);
    if($result){
      header('location:index.php?action=show');
    }else{
        echo "erro";
    }
}

function update_user(){      
    include_once ("connection.php");
    $query="SELECT * FROM users WHERE  id=".$_GET['id'];
    $result=mysqli_query($con,$query);
    return $result; 
}

function edit_users(){ 
    include "connection.php";
    $result="";
       $fname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $password=$_POST['password'];
       $sql="UPDATE  users SET  name='$fname', username='$lastname',password=md5($password) where id=".$_GET['id'];
       $result=mysqli_query($con,$sql);
       return $result;
}

?>