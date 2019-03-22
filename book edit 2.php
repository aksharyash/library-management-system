<?php
    session_start();
    include'connection.php';

  $sql = "SELECT *FROM book_list WHERE isbn='".$_POST['isbn']."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
    
    ?>
<form method="POST" action="">
<label> title</label>
<input type="text" value="<?php echo ''; ?>" name="title">
    <label> author</label>
<input type="text" value="<?php echo ''; ?>" name="author">
    <label>edition</label>
    <input type="text" value="<?php echo ''; ?>" name="edition">
    <label>publication</label>
    <input type="text" value="<?php echo ''; ?>" name="publication">
<input type="submit" name="submit" value="Update">
</form>


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