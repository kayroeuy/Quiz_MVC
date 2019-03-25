<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC-Project</title>
    <script src='view/jquery-1.9.1.js'></script>
    <script src='view/list.js'></script>
    <script src='view/bootstrap-3.3.7/js/bootstrap.min.js'></script>
    <link href='view/bootstrap-3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css' media='all'>
    <link href='view/style.css' rel='stylesheet' type='text/css' media='all'>
</head>
<body data-gr-c-s-loaded='true'>
    <div class="container mt-5">
        <legend class="header">
        <?php
             if($data['pages'] !=='login'){
              
              ?>
                <div>
                    <form method = 'post' action="index.php?action=logout">
                       <button type='submit' class='btn btn-primary float-right'>Logout</button>
                    </form>
                </div>
                 <?php
             }
            ?>
            <h3 class="pull">Employee Manager</h3>
           
        </legend>
        <?php
        
            include "view/".$data['pages'].".php";
          
        ?>
    </div>
    
</body>
</html>