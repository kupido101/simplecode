<?php
  session_start();

 include("database.php");

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {  
 $firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$Gender = $_POST['gender'];
$number = $_POST['cnumber'];
$address = $_POST['add'];
$gmail = $_POST['mail'];
$password = $_POST['pass'];  

if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{ 
  $query = "insert into account (fname, lname, gender, cnumber, address, email, pass) values('$firstname', '$lastname', '$Gender', '$number', '$address', '$gmail', '$password')";

  mysqli_query($con, $query);

  echo "<script type='text/javascript'> alert('Successfully Register')</script>";
}
else
{
   echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";

 }

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="Signnn.css">
</head>
<body>

<div class="signup">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form method="POST">
        <label for="">First Name</label>
        <input type="text" placeholder="First Name" name="fname" required> <br> <br>

        <label for="">Last Name</label>
        <input type="text" placeholder="Last Name" name="lname" required><br> <br>

        <label for="">Gender</label>
        <input type="text" placeholder="Gender" name="gender" required> <br> <br>
     
        <label for="">Contact Address</label>
        <input type="tel" placeholder="Contact Address" name="cnumber" required> <br> <br>


        <label for="">Address</label>
        <input type="text" placeholder="Address" name="add" required> <br> <br> 

        <label for="">Email</label>
        <input type="email" placeholder="Email" name="mail" required> <br> <br>

        <label for="">Password</label>
        <input type="password" placeholder="Password" name="pass" required> <br>  <br>

        <input type="submit" name="" value="submit">
    

    </form>

  <p>By clicking the Sign Up, you agree to our <br><br>
  <a href="">Terms and Condition</a> and   <a href="">Policy and Privacy</a>
  </p>
  <p>Already have and account? <a href="Login.php">Login here</a> </p>
</div>

</body>
</html>
