
    <div class="container">
            <div class="card">
                    <div class="card-header">Update</div>
                    <div class="card-body">
                    <?php
                    foreach ( $data['update-employee'] as $data):
                    ?>
                      <form action="index.php?action=edit&id=<?php echo $data['id']?>" method="post">
                            <div class="form-group">
                                 <input type="text" class="form-controll" name="firstname" placeholder="firstname" value=<?php echo $data['firstname']?> required>
                            </div>

                            <div class="form-group">
                            <input type="text" class="form-controll" name="lastname" placeholder="lastname" value=<?php echo $data['lastname']?> required>
                            </div>

                            <div class="form-group">
                                  <input type="number" class="form-controll" name="age" placeholder="age" value=<?php echo $data['age']?> required>
                            </div>
                            <div class="form-group">
                                  <input type="email" class="form-controll" name="email" placeholder="Email"  value=<?php echo $data['email']?> required>
                            </div>
                            <div class="form-group">
                                  <input type="text" class="form-controll" name="title" placeholder="Enter your title" value=<?php echo $data['title']?> required>
                            </div>

                      
                            <div class="form-group">
                                 <input type="number" class="form-controll" name="perk" placeholder="perk"  value=<?php echo $data['perks']?> required>
                            </div>
                            <div class="form-group">
                                 <input type="number" class="form-controll" name="salary" placeholder="salary" value=<?php echo $data['salary']?> required>
                            </div>
                            
                            <button class="btn btn-primary" type="submit" name="btn-edit">Update</button>

                            

                      </form>
                    
                    <?php endforeach ?>
                    </div>
            </div>
    
    </div>

<?php


?>
