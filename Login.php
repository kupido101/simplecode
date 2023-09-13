<?php
  session_start();

 include("database.php");

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];  

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from account where email = '$gmail' limit 1";
        $result = mysqli_query($con, $query);
   
        if($result)
        {
           if($result && mysqli_num_rows($result) > 0)
           {
             $user_data = mysqli_fetch_assoc($result);

             if($user_data['pass'] == $password)
             {
                header("location: Jessie.php");
                die;
             }
           } 
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
   

 }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="loggg.css">
</head>
<body>

     
    <div class="container">
         <h1>Login</h1>
        <form method="POST">
            <div class="input-container">
                <input type="email" name="mail" required="required">
                <label>Email</label>
            </div>

            <div class="input-container">
                <input type="password" name="pass" required="required">
                <label>Password</label>
            </div>
            <input type="submit" name="" value="submit">
        </form>

        
        <p>By clicking the Sign Up, you agree to our <br><br>
            <a href="">Terms and Condition</a> and   <a href="">Policy and Privacy</a>
            </p>
            <p>Don't have an account? <a href="Signup.php">Sign Up here</a> </p>
    </div>
    
</body>

</html>
