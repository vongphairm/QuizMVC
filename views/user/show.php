<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a href="index.php?action=view" class="btn btn-primary mb-4">Back</a> &nbsp;
            <a href="index.php?action=UserAdd" class="btn btn-info mb-4 float-right">Add</a> &nbsp;
        </div>   

        
     </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">FirstName</th>
            <th class="sort text-center" data-sort="fname">LastName</th>
            <th class="sort text-center" data-sort="fname">password</th>
            <th class="sort text-center">Action</th>
            <tbody class="list">
<?php          
$i=1;    

    foreach ( $data['user_data'] as $data):
 ?>
<tr>
    <td class="text-center"><?php  echo $i ?></td>
    <td class="text-center"><?php  echo $data['name']?></td>
    <td class="text-center"><?php  echo $data['username']?></td>  
    <td class="text-center"><?php  echo $data['password']?></td>  
    <td class="text-center">
    <a href="index.php ?action=detial&id=<?php echo $data['id']?>" class=""> <i class="glyphicon glyphicon-eye-open"></i></a>
     <a href="index.php ?action=updateUser&id=<?php echo $data['id']?>" 
    
     class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit "></i>Update</a>
     <a href="index.php?action=delete_users&id=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm"
       onclick="confirm_delete()"
     ><i class="glyphicon glyphicon-trash "></i>Delete</a>
    </td>
</tr>
<?php ++$i;
endforeach;?>
</tbody>
        </table>
    </form>
</div>

<script>
function confirm_delete() {
  return confirm('are you want to delete?');
}
</script>


