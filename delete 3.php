<?php
    session_start();
    include'connection.php';

    $sql = "SELECT *FROM book_list WHERE book_id='".$_GET['id']."'";
  $result = mysqli_query($conn, $sql);
   
    
    ?>

    
<?php
   
include'connection.php';
$sql = "DELETE FROM book_list WHERE id='".$_GET['id']."'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully deleted') </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    
    
?>