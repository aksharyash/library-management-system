<table border="1">
<?php
include'connection.php';
$sql = "SELECT *FROM book_info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><td>isbn: </td><tr>" . $row["isbn"];
        echo"<tr><td>title </td><tr>" . $row["title"];
        echo"<tr><td>author: </td><tr>" . $row["author"];
         echo"<tr><td>edition: </td><tr>" . $row['edition'];
         echo"<tr><td>publication: </td><tr>" . $row["publication"];
        echo"</th>";
        echo"</tr>";
        
//<script>window.location='test.html'   </script>
    }
} else {
    echo "0 results";
}
