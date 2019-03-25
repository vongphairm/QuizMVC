<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
br
<a href="index.php?action=show" class="btn btn-primary mb-4">Back</a> &nbsp;

<div class="card">
    <div class="card-body">
    <form method="post" action="index.php?action=Adduser">
  <div class="form-group">
      <input type="text" name="firstname" placeholder="Enter your FirstName" class="form-controll">
 </div>
  <div class="form-group">
      <input type="text" name="lastname" placeholder="Enter your LastName" class="form-controll">
 </div>
  <div class="form-group">
      <input type="password" name="password" placeholder="Enter your password" class="form-controll">
 </div>
    <button type="submit" name="reg" class="btn btn-primary">Add User</button>
  </form>

    </div>
</div>

</div>

</body>
</html>