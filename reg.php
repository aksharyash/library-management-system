<html>
    <style>
        h1{
            text-align: center;
        }    
    
    </style>    
<body bgcolor="87ceeb">
<h1>Student registration</h1>
	<form tag="Create Login" method="post" action="">
		<div align="center" cellpadding="5" cellspacing="5">
            id        : <input type="id" name="id" size="48" /><br /><br />
			Name      : <input type="name" name="name" size="48" /><br /><br />	   Password  : <input type="password" name="password" size="48"/><br /><br />
			D.O.B     : <input type="dob" name="dob" size="48"/><br /><br />
			Email     : <input type="email" name="email" size="48"/><br /><br />
			Telephone : <input type="telephone" name="telephone" size="48"/><br /><br />
			Address   : <input type="address" name="address" size="48" /><br /><br />

		<input type="submit" name="submit" value="Submit" />
        </div>
	</form>
                             

</body>
</html>

<?php
if(isset($_POST['submit']))
{
include'connection.php';
$query = "INSERT INTO student_reg(id,name,password,dob,email,telephone,address)VALUES('".$_POST['id']."','".$_POST['name']."','".$_POST['password']."','".$_POST['dob']."','".$_POST['email']."','".$_POST['telephone']."','".$_POST['address']."')";
$result = mysqli_query($conn,$query);
echo"<script>alert('add successfully')</script>"; 
}
?>