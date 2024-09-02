<?php
  include 'connect.php';
  $id=$_GET['updateid'];
  $sql="select * from ngenda where id='$id'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $id=$row['id'];
  $first_name=$row['first_name'];
  $last_name=$row['last_name'];
  $email=$row['email'];
  $phone=$row['phone'];
  $password=$row['password'];

  if(isset($_GET['submit'])){
    $id=$_POST['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql="update 'ngenda' set id='$id',first_name='$first_name',last_name='$last_name',email='$email',phone='$phone',password='$password' where id='.$id.'";
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
<input type="text" class="form-control" name="first_name" placeholder="first_name" value=<?php echo $first_name;?>><br><br>
<label for="">last_name</label>
<input type="text" class="form-control" name="last_name" placeholder="last_name" value=<?php echo $last_name;?>><br><br>
<label for="">email</label>
<input type="email" class="form-control" name="email" placeholder="email" value=<?php echo $email;?>><br><br>
<label for="">phone</label>
<input type="int" class="form-control" name="phone" placeholder="phone" value=<?php echo $phone;?>><br><br>
<label for="">password</label>
<input type="password" name="password" placeholder="password" value=<?php echo $password;?>><br><br>
<button type="submit" name="submit"><a href="display.php">submit</a></button>
<a href="display.php"><h2>view-detail</h2></a>
</form>



    </div>
    
    
</body>
</html>
