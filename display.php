<?php
include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
  <div class="containner">
    <table class="containner">
<thead>
    <tr>
        <a href="user.php"><h2>add_user</h2></a>
        <th>id</th>
        <th >first_name</th>
        <th>last_name</th>
        <th>email</th>
        <th>phone</th>
        <th>password</th>
        <th >operation</th>
    </tr>
</thead>
</body>
<?php
$sql="select* from ngenda";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result))
    {
    $id=$row['id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $password=$row['password'];
    echo '<tr>
    <td> '.$id.'</td>
    <td>'.$first_name.'</td>
    <td>'.$last_name.'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>'.$password.'</td>
    <td><button><a href="update.php ?updateid='.$id.'">update</a></button>
    <td><button><a href="delete.php ? deleteid='.$id.'">delete</a></button></td>

    </tr>';
    
}}
?>

</body>

    </table>
  </div>  
</body>
</html>