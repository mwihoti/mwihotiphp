<!DOCTYPE html>
<?php

include('connection.php');
error_reporting(0);
$userName = $_POST['fname'] ;
$userEmail = $_POST['umail'];
$userContact = $_POST['con'];

if (!$_POST['submit']){
    echo "All feilds are required";
}
else{
    $sql = "INSERT into Data (Name, Email, Contact)
    values ('$userName', '$userEmail', '$userContact') ";
  if (mysqli_query($conn, $sql)){
    echo "Data creation successful";

  }
  else{
    echo "Something went wrong, try later";
  } 
}

?>
<head>
    welcome
</head>
<body>
    <form action="me.php" method="POST">
        Name : <input type="text" name="fname" required>
        Email : <input type="text" name="umail" required>
        Contact : <input type="text" name="con" required>
        <input type="submit" name="submit" value="create">
    </form>
    <p>this is my first database connection</p>
</body>
</html>