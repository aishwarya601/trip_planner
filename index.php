<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Trip Planner</title>
  <link rel="stylesheet" href="styling.css">
</head>
<body>
  <img class="iit" src="iit.jpg" alt="Passion University">
  <div class="container">
    <h3>So finally you are in this page!<br> Welcome to Passion University's Indian Tour Form<br></h3>
    <p>Please Enter your details and submit this form to confirm your booking for the trip!!! </p>
    <form action="index.php" method="post">
      <input type="text" name="Name" id="name" placeholder="Enter your name here">
      <input type="text" name="age" id="age" placeholder="Enter your age here">
      <input type="text" name="gender" id="gender" placeholder="Enter your gender">
      <input type="text" name="Email" id="Email" placeholder="Enter your Email here">
      <input type="text" name="Phone.No" id="Phone" placeholder="Enter your Phone number here">
      <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any additonal information"></textarea>
      <button class="btn">Submit</button>
      
    </form>
  </div>
</body>
<script src="index.js"></script>
</html>
<?php
if(isset($_POST['name'])){
$server= "localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
  die("connection to the database failed due to ".mysqli_connect_error());
}

echo "successfully connected to DB";
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other=$_POST['others'];
$gender=$_POST['gender'];
$sql="INSERT INTO `trip`.`tour` (`name`, `age`, `gender`, `email`, `phone`, `others`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$others', current_timestamp());";
//echo $sql;
if(con->query($sql)==true){
  echo "data has been successfully inserted";
}
/*else{
  echo"ERROR: $sql <br> $con->error";
}*/
$con->close();
}
?>