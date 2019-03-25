<div class="pull-right">
<a href="index.php?action=register"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;

</div>
<div class="container">
</div>
<form action="#" method="POST">
<table class="table-bordered col-md-12">
<th class="sort text-center">ID</th>
<th class="sort text-center" data-sort="fname">Firstname</th>
<th class="sort text-center" data-sort="age">Lastname</th>
<th class="sort text-center" data-sort="age">password</th>
<th class="sort text-center">Action</th>
 <!-- IMPORTANT, class="list" have to be at tbody -->
 <?php 
    foreach($data['get_view'] as $value):
?>
<tbody >
    <tr>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['username'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo md5($value['password']) ;?></td>
        <td>
        <a href='index.php?action=update&id=<?php echo $value['id'];?>'><i class='glyphicon glyphicon-edit ' style='font-size:16px; color:blue;'></i></a>&nbsp;
           
            <a href='index.php?action=delete&id=<?php echo $value['id'];?>' onclick='return confirm("Are you sure to delete?") '><i class='glyphicon glyphicon-trash' style='font-size:16px; color:red;'></i>
        </td>
    </tr>
</tbody>
<?php
endforeach;
?>
</div>