<center><table style="text-align:center;" border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Enrollment</th>
    <th>Name</th>
    <th>Age</th>
    <th>Course</th>
    <th>Branch</th>
    <th>Contact</th>
    <th>Email</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>    
</thead>
<tbody>

<?php
include('config1.php');
?>

<?php
$sql = "SELECT * FROM `musers`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
   <tr>
        <td><?php echo $row['Id']; ?></td>
        <td><?php echo $row['Enrollment']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['Course']; ?></td>
        <td><?php echo $row['Branch']; ?></td>
        <td><?php echo $row['Contact']; ?></td>
        <td><?php echo $row['Email']; ?></td>
       
        <td><a href="edit1.php?id=<?php echo $row['Id']; ?>">Edit</a></td>
        <td><a href="delete1.php?id=<?php echo $row['Id']; ?>">delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table></center>