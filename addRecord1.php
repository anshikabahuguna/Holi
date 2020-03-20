<?php
include_once('config1.php');
?>
<?php
    if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $course = $_POST['Course'];
    $branch = $_POST['Branch'];
    $contact = $_POST['Contact'];
    $email = $_POST['Email'];
    
    $sql  = "INSERT INTO `musers` (name, age, course, branch ,contact, email) 
    VALUES ('$name', '$age','$course','$branch', '$contact', '$email')";
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully';
    }
    else{
        echo 'Data insertion failed'.mysqli_error($conn);
    }
}
else
{
    echo "Go back to input page";
}
?>
