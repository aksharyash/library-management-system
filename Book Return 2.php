<table border="1">
<?php
include'connection.php';
$sql = "SELECT *FROM issue where id='".$_POST['id']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><th>id: </td><th>" . $row["id"];
        echo"<tr><th>isbn: </td><th>" . $row["isbn"];
       ;
              echo"<td><a href='Book Return 3.php?id=$row[isbn]'>Delete</td>";
        echo"</th>";
        echo"</tr>";
        
    }
}
    ?>