<?php
$con=new mysqli('localhost','root','','levania');
if($con){
    echo 'successfully';
}
else{
    die(mysqli_error($con));
}

?>