<?php
$conn = mysqli_connect ("localhost", "root", "", "psits");
if(!$conn){
    die("wala na");
}

$email = $_POST['email'];

$sql = "Select = from students Where email = '$email' and password = '$password'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    echo"SUCCESS";
    exit();
}
else{
    echo("wala na gd");
}
mysqli_close($conn);

?>
