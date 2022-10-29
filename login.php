<!DOCTYPE html>
<html lang="en">
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
    /* .link{
        color: white;
    } */
    form{
    border: 2px solid black;
    
    margin-top:80px ;
    padding: 40px;
    border-radius: 30px;
    background-color: white;
   
    

    }
    .container{

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
   
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

<body>
    <div class="head">

        <h1>Shopbuddy.in</h1>
    </div> 
    
    <div class="container">
        
        <form action="" method="post" name="form1"  >

            <h1>LOGIN !!</h1>
            <label for="username">username</label>
            <br>
            <input type="text" name="username" id="username" required > 
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" class="but" value="login">
            <div class="link">
                Don't have an account click <a href="signup.php">here</a>
        
            </div>
        </form>
        <?php 
   include 'connection.php';

   if ($_SERVER['REQUEST_METHOD']== 'POST' )  //$_SERVER['REQUEST_METHOD']== 'POST'
   {
    $check=true;
    
     $username = $_POST['username'];
     $pass = $_POST['password'];
     $redirect =false;

     $sql = "SELECT * FROM `usertable` where `username` = '$username'";
     $uncheck = mysqli_query($conn ,$sql);
     $sql1 = "SELECT * FROM `usertable` where `password` = '$pass'";
     $pscheck = mysqli_query($conn ,$sql1);

     if(mysqli_num_rows($uncheck) == 0)
     {
        echo '
        <div style="color: white ;">
            <h1>Invalid credential</h1>
        </div>';
     }
     else if(mysqli_num_rows($pscheck) == 0)
     {
        echo '
        <div style="color: white ;">
            <h1>Invalid credential</h1>
        </div>';
        
     }
     else
     {
        session_start();
        $_SESSION['loggedin'] =true;
        $_SESSION['username'] = $username; 
        header("Location:user.php");
      
       

      
    

     }



   }
?>
       
    </div>


    
</body>
</html>   