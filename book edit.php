<?php
include'connection.php';
$sql = "SELECT *FROM book_list";
$result = mysqli_query($conn, $sql);


?>

 
<table border="5" align="center" cellpadding="5" cellspacing="5">
 
    <th>ISBN NO</th><th>title:</th><th>Author</th><th>Action</th>
<body bgcolor="87ceeb">
    
<?php
include'connection.php';
$sql = "SELECT *FROM book_list";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        
        echo"<tr><td>".$row["isbn"];
        echo"<td>" . $row["title"];
        echo"<td>" . $row["author"];
         echo"<td><a href='bookedit1.php?isbn=$row[isbn]'>Edit</a></td>";
        
    }
} else {
    echo "0 results";
}

?>