<html>
<head>
<title>Login form
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h1>Library Management system</h1>    
<div class="adminlogin">
    <h2>Admin Login</h2>
    <form method="POST" action="">
    <p>Admin name</p>
    <input type="text" name="Admin_name" placeholder="Enter Admin name">
    <p>Password</p>
    <input type="Password" name="password" placeholder="Enter Password">
    <input type="submit" name="submit" value="Login">
     <a href="#">Forgot Password</a><br><br>
         <a href="#">Dont have an account</a>
    </form>
    </div>       
    <div class="studentlogin">
    <h2>Student Login</h2>
    <form method="POST" action="">
    <p>Student name</p>
    <input type="text" name="" placeholder="Enter Student name">
    <p>Password</p>
    <input type="Password" name="" placeholder="Enter Password">
    <input type="submit" name="submit" value="Login">
    <a href="#">Forgot Password</a><br><br>
    <a href="#">Dont have an account</a>
    </form>
    </div>    
</body>    
</head>
</html>    
    
<?php
if(isset($_POST['submit']))
{
include'connection.php';
$sql = "SELECT *FROM admin where Admin_name='".$_POST['Admin_name']."' and Password='".$_POST['password']."'";
$result=mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0)
{
session_start();
$_SESSION['A name']=$_POST['Admin name'];
echo"<script>alert('Login successfully')</script>";
echo"<script>window.location='admin panel.php'</script>"; 
mysqli_close($conn);
}
else
{
echo"<script>alert('user id and password wrong')</script>";
}
    }

?>        