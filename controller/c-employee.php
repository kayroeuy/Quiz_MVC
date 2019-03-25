<?php
$data = array();
flexible_function($data );
function flexible_function(&$data){
     $function = 'register';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}
function view(&$data){
    $data['employee_data']=m_get_data();
   $data['pages'] = "employee/view";
}
function add(&$data){
    // $data = add_get_data();
    $data['pages'] = "employee/add";
}
function addData(){
    $data = add_get_data();
        header('location:index.php?action=view');
    
}
function delete(&$data){
   $data['pages'] = "employee/delete";
}
function update(&$data){
    $data['update_employee']= update_user();
    $data['pages']="employee/update";
}
function deleteData(){
  $data_delete =user_delete();
  header('location:index.php?action=manageUser');
 }
 function detail(&$data){
     $data['delail_employee']=m_employee_detail();
    $data['pages'] = "employee/detail";

 }
 function login(&$data){
   
    $data['pages'] = "login";
 }
 function check(){
    ValidateDB();
    header('location:index.php?action=view');
 }
 function logout(&$data){

    loyoutvalidate();
    $data['pages']='login';
 }
 function register(&$data){
     $data['pages']='employee/register';
 }
 function Addregister(&$data){
     $data=registerForm();
     if($data){
         header('location:index.php?action=login');
     }
    
 }
 function ManageUser(&$data){
    $data['get_view']=get_data();
     $data['pages']='employee/manageUser';
 }
 
