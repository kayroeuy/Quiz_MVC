<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<a href='index.php?action=add'><i class='glyphicon glyphicon-plus-sign' style='font-size:20px;'></i></a>&nbsp;
<a href="index.php?action=view"><i class="material-icons">arrow_back</i></a>
<div class='container' >
        
        <div class="row">
                <div class="col-3"> </div>
                        <div class="col-6">
         <div class="card shadow-lg">
        <div class="card-header text-center">Detail </div>
               <?php 
                foreach($data['delail_employee'] as $value):
               ?> 
                 <li class="list-group-item">Name: 
                    <?php echo $value['firstname'].$value['lastname'] ;?>
                   </li>
                   <li class="list-group-item">Age:
                   <?php echo $value['age']; ?>
                   </li>
                   <li class="list-group-item">Salary:
                   <?php echo $value['salary'];?>
                   </li>
               
              
                <?php endforeach;?>
           
    </div>
       
                        </div>
                  <div class="col-3"></div>
               
        </div>

        
</div>
    
</body>
</html>    
