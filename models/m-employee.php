<?php
    function m_get_data(){
        $query = "select * from employee";
        include 'connection.php';
        $result = mysqli_query($conn,$query);
        $row =[];
        if($result && mysqli_num_rows($result)>0){
            while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $row[]=$get_result_to_array;
            }
        }
        return $row;
    }
    function add_get_data(){
        include "connection.php";
       if(isset($_POST['btn-save'])){
           $firstname = $_POST['firstname'];
           $lastname = $_POST['lastname'];
           $salary = $_POST['salary'];
           $age = $_POST['age'];

       }
       $query = "INSERT INTO employee(firstname,lastname,salary,age) values('$firstname','$lastname','$salary','$age')";
       $result = mysqli_query($conn,$query);
       return $result;
    }

    function m_employee_delete(){
        include "connection.php";
        $id = $_GET['id'];
        $query = "DELETE FROM employee where id = '$id'";
        $result = mysqli_query($conn,$query);
        return $result;
    }
    function  m_employee_detail(){
         include "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * From employee where id = '$id'";
    $result = mysqli_query($conn,$query);
    return $result;
    }
    function ValidateDB(){
        include "connection.php";
        if(isset($_POST['but_submit'])){

            $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
            $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
        
            if ($uname != "" && $password != ""){
        
                $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
                $result = mysqli_query($conn,$sql_query);
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
}
function loyoutvalidate(){
    include "connection.php";
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }
}
function registerForm(){
    if(isset($_POST['but_register'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
       $password=$_POST['password'];
        $comfirm =$_POST['comfirm'];
        if($password == $comfirm && $password){
            include "connection.php";
            $query = "INSERT INTO user(username,name,password) values('$firstname','$lastname','$password'";
            $result =mysqli_query($conn,$query);
            // var_dump($result);
            return $result;
        }else{
            header('location:index.php?action=register');
        }
    }
        
}
function get_data(){
    $query = "select * from user";
    include 'connection.php';
    $result = mysqli_query($conn,$query);
    $row =[];
    if($result && mysqli_num_rows($result)>0){
        while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $row[]=$get_result_to_array;
        }
    }
    return $row;
}
function user_delete(){
    include "connection.php";
    $id = $_GET['id'];
    $query = "DELETE FROM user where id = '$id'";
    $result = mysqli_query($conn,$query);
    return $result;
}
function update_user(){
    include 'connection.php'; 
    $id=$_GET['id'];
   if(isset($_POST['btn-update'])){
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $password = $_POST['password'];
   }
   $query = "UPDATE user set(username='$firstname',name='$lastname',password='$password' where id='$id'";
   $result= mysqli_query($conn,$query);
   return $result;
}
?>