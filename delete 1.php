<html>
<head></head>
<body>
<body bgcolor="87ceeb">
<div>    
<form method="POST" action="delete 2.php">
<center><label for="isbn">isbn:</label></center>
<center><input type="text"  name="isbn" ></center>
<center><input type="submit" name="submit" value="search"></center>

</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include'connection.php';
$sql = "SELECT *FROM book_list where isbn='".$_POST['isbn']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
   session_start();
    $_SESSION['uname']=$_POST['isbn'];
  echo"<script>alert('search successful')</script>";
    echo"<script>window.location='delete 2.php'</script>";
    mysqli_close($conn);
}
    else
    {
     echo"<script>alert('User id and password Wrong')</script>";   
    }
}
?>
