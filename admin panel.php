<html>
<head>
<title>library management</title>
</head>
<body>
<style>
h1
{
margin-left:30%;
padding-top:100px;
padding-bottom:10px;    
}
#l{
background-image: url("iimage.jpg");
background-repeat: no-repeat;
background-position: center;

}
.nav { 
    padding: 30px;
    list-style-type: none;
    text-align: center;
    width: 100%;
    background: #000033;
    height: 40px;
    margin-top:40px;
    opacity:0.8;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.nav li {
    display: inline-block;
    font-size: 20px;
    padding-left: 20px;
    padding-right: 20px; 
}
.dropdown-content a:hover {
background-color: #f1f1f1;
}
.dropdown:hover .dropdown-content {
    display: block;
}
h2{
font-size:40px;
}
    
body
{
background: url("img.jpg");
background-position:bottom;
background-repeat: no-repeat;

}
</style>  
<body>
    
    
</body>
<div id="l">
<h1> </h1>
</div>    
<ul class="nav">
    <div class="dropdown">
<div class="p">
    <li><a href="">Enroll Now</a></li>
        </div>
    <div class="dropdown-content">
    <a href="reg.php">register student</a>
    <a href="show.php">show records</a>
     <a href="search_student.php">search student</a>
  </div>
 </div>
<div class="dropdown">
<div class="p">
  <li><a href="">Books_detail</a></li>
</div>
<div class="dropdown-content">

    <a href="book edit.php">Edit books</a>
    <a href="book reg.php">Add Books</a>
    <a href="Book search.php">Search books</a>
  <a href="delete 1.php">Delete Books</a>
  </div>
</div>
  <li><a href="issue.php">Books Issue</a></li>  

  <li><a href="Book Return 1.php">Book Return</a></li>
</ul>
<marquee><h2>Welcome To Library Management</h2></marquee>
</body>
</html>