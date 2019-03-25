
    <div class="container">
            <div class="card">
                    <div class="card-header">Update</div>
                    <div class="card-body">
                    <?php
                    foreach ( $data['update-user'] as $data):
                    ?>
                      <form action="index.php?action=editUser&id=<?php echo $data['id']?>" method="post">
                            <div class="form-group">
                                 <input type="text" class="form-control" name="firstname" placeholder="firstname" value=<?php echo $data['name']?> required>
                            </div>
                           <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="lastname" value=<?php echo $data['username']?> required>
                            </div>
                            <div class="form-group">
                                  <input type="password" class="form-control" name="password" placeholder="age" value=<?php echo $data['password']?> required>
                            </div>    
                            <button class="btn btn-primary" type="submit" name="btn-edit">Update</button>                  
                            <input type="Reset" class="btn btn-primary float-right" value="reset">
                      </form>
                    
                    <?php endforeach ?>
                    </div>
            </div>
    
    </div>

<?php


?>
