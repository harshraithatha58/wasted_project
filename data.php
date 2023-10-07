<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
</head>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name=$_POST['your_name'];
    $pass=$_POST['your_pass'];
   
}
//submit these to a database
$servername="localhost";
$username="root";
$password="";
$database="test1";
//connection object
$conn =mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("Sorry we failed to connect".mysqli_connect_error());
}
echo"Connection was succesful";
echo"<br>";
//submit these to a database
$sql="INSERT INTO `info` ( `your_name`, `your_pass`) VALUES ('$name', '$email')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!!</strong> Your entry has been submitted successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
else {
    echo"the record was not inserted".mysqli_error($conn);
}
echo $result;



?>
<body>
    <p>hello world</p>
</body>

</html>