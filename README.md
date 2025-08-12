<?php
$conn = mysqli_connect ("localhost", "root", "", "psits");
if(!$conn){
    die("Connection Failed");
}

$email = $_POST['email'];

$sql = "Select = from students Where email = '$email' and password = '$password'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    echo"SUCCESS";
    exit();
}
else{
    echo("NO CONNECTION");
}
mysqli_close($conn);


?>
