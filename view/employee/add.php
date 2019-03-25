<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<a href='index.php?action=add'><i class='glyphicon glyphicon-plus-sign' style='font-size:20px;'></i></a>&nbsp;
<div class='container' >
        <div class="row">
                <div class="col-3"> </div>
                        <div class="col-6">
         <div class="card shadow-lg">
        <div class="card-header text-center">Add New </div>
            <div class="card-body">
                <form action="#" method='post'>
                        <div class="form-group">
                                <input type="text" class="form-control" name="firstname" placeholder="FirstName"
                              required> 
                        </div>
                        
                        <div class="form-group">
                                <input type="text" class="form-control" name="lastname" placeholder="LastName"  required> 
                        </div>
                        
                        <div class="form-group">
                                <input type="number" class="form-control" name="salary" placeholder="Salary"   required> 
                        </div>
                        <div class="form-group">
                                <input type="number" class="form-control" name="age" placeholder="Age"   required> 
                        </div>
                        <a href="view.php"><button class="btn bg-info float-left" name="btn"><i class='fas fa-arrow-left'></i> Back</button></a>
                        <button class="btn bg-info float-right" name="btn-save">Save</button>

                </form>
                
            </div>
    </div>
       
                        </div>
                  <div class="col-3"></div>
               
        </div>

        
</div>
    
</body>
</html>
<?php
if(isset($_POST['btn-save'])){
        addData();
}
?>