
<?php
    //  var_dump($data['employee_data'] )
   
?> 

<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
<input class="search" placeholder="Search" />
</div>

<div class="pull-right">
<a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
<a href="index.php?action=ManageUser" class='text-success btn btn-success'>ManageUser</a>
</div>
</div>
<form action="#" method="POST">
<table class="table-bordered col-md-12">
<th class="sort text-center">ID</th>
<th class="sort text-center" data-sort="fname">Student Name</th>
<th class="sort text-center" data-sort="age">Age</th>
<th class="sort text-center" data-sort="salary">Salary</th>
<th class="sort text-center">Action</th>
 <!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
<?php 
    // if($data['employee_data']!=""){
    //     $i = 1;
    // }
    $i = 1;
foreach ($data['employee_data'] as $value):

?>

        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $value['firstname'].$value['lastname'] ;?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['salary'];?></td>
            <td class='text-center'>
            <a href='index.php?action=update&id=<?php echo $value['id'];?>'><i class='glyphicon glyphicon-edit ' style='font-size:16px; color:blue;'></i></a>&nbsp;
            <a href='index.php?action=detail&id=<?php echo $value['id'];?>'><i class='glyphicon glyphicon-eye-open' style='font-size:16px; color:green;'></i></a>&nbsp;
            <a href='index.php?action=delete&id=<?php echo $value['id'];?>' onclick='return confirm("Are you sure to delete?") '><i class='glyphicon glyphicon-trash' style='font-size:16px; color:red;'></i>
         </a>&nbsp;
            
            </td>
        </tr>
        
<?php
$i++;
endforeach; ?>
</tbody>
</table>
</form>
</div>

<script>
var options = {
valueNames: ['id', 'fname', 'age', 'salary']
};

var userList = new List('users', options);
</script>