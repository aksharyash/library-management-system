<html>
<head>
<title>library management</title>
</head>
<body>
<?php
include'connection.php';
$sql = "SELECT *FROM book_info where isbn='".$_POST['isbn']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
    
$sql2="SELECT *FROM student_reg where id='".$_POST['id']."'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
?>
<table><form method="post" action="">
<tr>    
<td>id :</td>
<td> <input type="text" name="id"  value="<?php echo $row2['id']; ?>"size="48"> </td>
</tr>        
<tr>    
<td>Name :</td>
<td> <input type="text" name="name" value="<?php echo $row2['name']; ?>" size="48"> </td>
</tr>    
<tr>    
<td>dob :</td>
<td> <input type="text" name="dob"  value="<?php echo $row2['dob']; ?>"size="48"> </td>
</tr>    
<tr>    
<td>Telephone :</td>
<td> <input type="text" name="telephone"  value="<?php echo $row2['telephone']; ?>"size="48"> </td>
</tr>    
<tr>    
<td>Address :</td>
<td> <input type="text" name="address" value="<?php echo $row2['address']; ?>" size="48"> </td>
</tr>    
<tr>    
<td>ISBN :</td>
<td> <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" size="48"> </td>
</tr>        
<tr>
<td>Title :</td>
<td> <input type="text" name="title" value="<?php echo $row['title']; ?>" size="48"> </td>
<tr>
<td>Author :</td>
<td> <input type="text" name="author"  value="<?php echo $row['author']; ?>"size="48"> </td>
</tr>
<tr>
<td>Edition :</td>
<td> <input type="text" name="edition"  value="<?php echo $row['edition']; ?>"size="48"> </td>
</tr>
<tr>
<td>Publication: </td>
<td> <input type="text" name="publication" value="<?php echo $row['publication']; ?>" size="48"> </td>
</tr>
    
    </table>
<input type="submit" name="submit" value="submit">

    </form>    
</body>
</html>


<?php
$date7=date("M");
$dt4=explode('/',$date7);
if(isset($_POST['submit']))
{
include'connection.php';
$query = "insert into issue(id,name,dob,telephone,address,isbn,author,edition,publication,month)values('".$_POST['id']."','".$_POST['name']."','".$_POST['dob']."','".$_POST['telephone']."','".$_POST['address']."','".$_POST['isbn']."','".$_POST['author']."','".$_POST['edition']."','".$_POST['publication']."','".$date7."')";
$result = mysqli_query($conn,$query);
echo"<script>alert('add successfully')</script>"; 
    //echo"<script>window.location='issue.php'</script>";
}
?>