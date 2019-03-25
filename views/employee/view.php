<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a href="index.php?action=add" class="btn btn-primary mb-4">Add</a> &nbsp;
            <a href="index.php?action=show" class="btn btn-info float-right">Manage User</a>

        </div>   

        
     </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Student Name</th>
            <th class="sort text-center" data-sort="fname">Title</th>
            <th class="sort text-center" data-sort="age">Age</th>
            <th class="sort text-center" data-sort="age">Email</th>
            <th class="sort text-center" data-sort="salary">Salary</th>
            <th class="sort text-center" data-sort="salary">Perk</th>
            <th class="sort text-center">Action</th>
            <tbody class="list">
<?php          
$i=1;    

    foreach ($data['employee_data'] as $data):
 ?>
<tr>
    <td class="text-center"><?php  echo $i ?></td>
    <td class="text-center"><?php  echo $data['firstname']." ".$data['lastname']?></td>
    <td class="text-center"><?php  echo $data['title']?></td>
    <td class="text-center"><?php  echo $data['age'] ?></td>
    <td class="text-center"><?php  echo $data['email'] ?></td>
    <td class="text-center"><?php  echo $data['salary']."$" ?></td>
    <td class="text-center"><?php  echo $data['perks']."$" ?></td>
    <td class="text-center">
    <a href="index.php ?action=detial&id=<?php echo $data['id']?>" class=""> <i class="glyphicon glyphicon-eye-open"></i></a>
     <a href="index.php ?action=update&id=<?php echo $data['id']?>" 
    
     class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit "></i>Update</a>
     <a href="index.php ?action=delete&id=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm"
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


