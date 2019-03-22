<table border="1">
<?php
include'connection.php';
$sql = "SELECT *FROM book_info";
$result = mysqli_query($conn, $sql);


 
        
 while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["isbn"];?> </td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["edition"];?> </td>
<td><?php echo $row["publication"];?> </td>
</tr>
<?php
}
}
}
else
echo "<center>No books found in the library by the name </center>" ;
?>
</table>