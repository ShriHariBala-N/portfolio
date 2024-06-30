<?php
if(isset($_POST['Send'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $con=mysqli_connect("localhost","root","","portfolio");
    $sql="insert into port values('$name','$email','$message')";
    if($con->query($sql)==true)
    {
     echo "Inserted  Successfullly";
    }
    else{
        echo "failed";
    }
}
?>  