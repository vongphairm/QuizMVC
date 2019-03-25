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

    
 <?php
 foreach ( $data['update-employee'] as $data):
 ?>        

 
            <h5>Name: <?php  echo $data['firstname'].$data['lastname']; ?></h5>
            <h5>Employee email :<?php  echo $data['email']; ?></h5>
            <h5>Employee Age:<?php  echo $data['age']; ?></h5>
            <h5>Employee Title:<?php  echo $data['title']; ?></h5>
            <h5>Employee Salary:<?php  echo $data['salary']; ?></h5>
            <h5>Employee Perks :<?php  echo $data['perks']; ?></h5>

     
</div>
    
    </table>
    <?php endforeach ?> 

</body>
</html>