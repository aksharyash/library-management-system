<?php
   
include'connection.php';
$sql = "UPDATE  issue SET status='0' WHERE isbn='".$_GET['id']."'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully deleted') </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    
    
?>