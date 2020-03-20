<?php
$link = mysqli_connect("localhost", "root", "", "csec2020");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id =$_GET['id'];
$sql = "DELETE FROM musers where id='$id'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
    header("Location:rt1.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>