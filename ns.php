<?php
$conn=mysqli_connect("localhost","root","","portfolio");
if(isset($_POST["send"])){
    $name=$_POST["pname"];
    $email=$_POST["mail"];
    $address=$_POST["add"];
    $sql="insert into port values('$name','$email','$address')";
    mysqli_query($conn,$sql);
    echo "Inserted Successfully";
}
?>  