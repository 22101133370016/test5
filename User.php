<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql="insert into ngenda (first_name,last_name,email,phone,password)
    values('$first_name','$last_name','$email','$phone','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
    }
    else{
        die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my project</title>
    <link rel="stylesheet" href="User.css">

</head>
<body>
    <div class="containner"> 
<form method="post">

<label for="">first_name</label>
<input type="text" name="first_name" placeholder="first_name"><br><br>
<label for="">last_name</label>
<input type="text" name="last_name" placeholder="last_name"><br><br>
<label for="">email</label>
<input type="email" name="email" placeholder="email"><br><br>
<label for="">phone</label>
<input type="int" name="phone" placeholder="phone"><br><br>
<label for="">password</label>
<input type="password" name="password" placeholder="password"><br><br>
<button type="submit" name="submit">submit</button>
<a href="display.php"><h2>view-detail</h2></a>
</form>


    </div>
    
</body>
</html>