<body bgcolor="87ceeb">
<table border="1">
<?php
include'connection.php';
$sql = "SELECT *FROM book_list where isbn='".$_POST['isbn']."'";
$result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><th>isbn: </td><th>" . $row["isbn"];
        echo"<tr><th>title: </td><th>" . $row["title"];
        echo"<tr><th>author: </td><th>" . $row["author"];
         echo"<tr><th>edition: </td><th>" . $row["edition"];
         echo"<tr><th>publication: </td><th>" . $row["publication"];
              echo"<td><a href='delete 3.php?id=$row[id]'>Delete</td>";
        echo"</th>";
        echo"</tr>";
        
//<script>window.location='test.html'   </script>
    }
} else {
    echo"<script>alert('User id and password Wrong')</script>"; echo "0 results";
}