<!DOCTYPE html>
<html lang="en">
<?php 
include 'connection.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         
    body{
        background-color: rgb(6, 28, 100);
        margin: 0px;
        padding: 0px;
    }
    
    form{
    border: 2px solid black;
    background-color: white;
    margin-top:80px ;
    padding: 40px;
    border-radius: 30px;
    }
    .container{

    display: flex;
    justify-content: center;
    align-content: center;
}

.but{
    
    padding: 10px;
   
    background-color: rgb(68, 68, 250);
    color: white;
    font: bold;
    border-radius: 10px;
   margin-top: 20px;
   margin-bottom: 20px;
}
.head
{
    text-align: center;
  font-family: 'Times New Roman', Times, serif;
  font-size: x-large;
  color: white;
}
</style>
</head>
<body>
    
    
   <div class="head">

       <h1>Shopbuddy.in</h1>
   </div> 
    <div class="container">
        
        <form action="" name="form1" method="post" onsubmit="return validation()">
            <h1>Sign Up</h1>
            <label for="username">username</label>
            <br>
            <input type="text" name="username" id="username" required > 
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="Cpassword">Confirm  Password</label>
            <br>
            <input type="password" name="Cpassword" id="Cpassword" required>
            <br>
            <input type="submit" class="but" value="Submit">
            <!-- <button onclick="validation()" >Submit</button> -->
            <div class="link">
            Already have an account click <a href="login.php">here</a>
        </div>
        </form>
       
        </div>
    <?php
    $password ="";
    $servername = "localhost";
    $username = "root";
    $database = "user";
    
        $conn = mysqli_connect($servername,$username , $password ,$database);
    
    if(!$conn)
    {
        echo  "connectin not estanlish";
    }
    else
    {
    if ($_SERVER['REQUEST_METHOD']== 'POST')
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $cpass = $_POST['Cpassword'];
        
        $sec = "SELECT * FROM  `usertable` where `username` = '$username'";
        $exe =mysqli_query($conn, $sec);

        if(mysqli_num_rows($exe) != 0)
        {
            echo ("username is already taken ");
        }
        else
        {


        

$sql="INSERT INTO `usertable` (`username`, `password`, `cpassword`) VALUES ('$username', '$pass', '$cpass');";
$result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo  "its is not inserted ";

    }
    else 
    {
        echo '
        <div style="color: white ;">
            <h1>signup successfully</h1>
        </div>';
    }

    }
}
}
    ?>

    <script  type="text/javascript">

       
	        
             
            function validation()
            {
                let username  = document.form1.username.value;
	        let password  = document.getElementById("password").value ;
	        let cpass     = document.getElementById("Cpassword").value;
           
            if(username.length < 5)
            {
                alert("username is too short ");
              return false;
            }
           
            if(password.length < 8)
            {
                alert("password is too short");
              return false;
            }
            else if( password !=  cpass)
            {
                alert("password and confirm password doesn't match");
                return false;
            }
            else{
                return true;
            }
        }
	

    </script>
</body>
</html>