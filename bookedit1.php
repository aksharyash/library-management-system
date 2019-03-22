<?php
include'connection.php';
$sql = "SELECT *FROM book_list";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Book edit</h2></center>
<form action="" method="post">
 
<table  align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter ISBN :</td>
<td> <input type="text" name="isbn" value="<?php echo $row['isbn'];  ?>" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit" value="submit">
<input type="reset" name="submit" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
include'connection.php';
$sql = "UPDATE book_list SET author='".$_POST['author']."',title='".$_POST['title']."',edition='".$_POST['edition']."',publication='".$_POST['publication']."' WHERE isbn='".$_GET['isbn']."'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully Update') </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    }
    
?>