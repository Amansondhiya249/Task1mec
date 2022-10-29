<?php  
session_start();
if(!isset($_SESSION['loggedin'])  ||  $_SESSION['loggedin']!=true )
{
  header("Location:login.php");
  exit;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <style>
      @media screen and (max-width:1208px){

       .product{
        overflow:scroll;
       }
        
      }
      .containers{

        display: flex;
        justify-content: center;
      align-items: center;
        height: 232px;
        border-bottom: 1px solid rgb(2, 2, 67);
      }
   
      .sw{
        display: flex;
align-content: center;
justify-content: center;

      }
      .product{

        border-bottom: 1px solid black;
        height: 444px;
    
      }
      .col:hover{

      border: 1px solid transparent;
      border-radius: 35px;
      height: 400px;
        
      }
      .buy
      {
        padding: 10px;
        margin: 4px;
        border: 1px solid black;
        text-decoration: none;
        background-color: rgb(25, 25, 255);
        color: white;
        border-radius: 17px;
        font: bold;
        

        
      }
      img{
        height: 250px;
        width: 250px;
      }
      .im
      {
        height: 70px;
        width: 70px;
        border-radius: 25px;
        
      }
      
    </style>
   
</head>

<body>
  <nav class="navbar  navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">shopbuddy.in</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MyCart</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Home appliances</a></li>
              <li><a class="dropdown-item" href="#">Smart watches</a></li>
              <li><a class="dropdown-item" href="#">shoes </a></li>
              <li><a class="dropdown-item" href="#">beauty products</a></li>
              <li><a class="dropdown-item" href="#">sports,fitness and outdoors</a></li>
              <li><a class="dropdown-item" href="#">Musical instrument</a></li>
              <li><a class="dropdown-item" href="#">Luggage & bags</a></li>
              <li><a class="dropdown-item" href="#">Office product</a></li>
              <li><a class="dropdown-item" href="#">Electronics</a></li>
              <li><a class="dropdown-item" href="#">and many more...</a></li>
             
            </ul>
          </li>
          <?php 
          if($_SESSION['loggedin'] != true )
          {
          echo '
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">login</a>
          </li>';
          }
          if($_SESSION['loggedin'] == true )
          {
          echo '
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">logout </a>
          </li>
          ';
          }
          ?>
        </ul>   
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search for the product" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div> 
     
      
    </div>
  </nav>

  <div class="containers">
<h1>    welcome <?php echo $_SESSION['username']?> to shopbuddy.in  </h1>
<img  class="im" src="tr.png"  alt="">    
  </div>
  <div class="product">
    <div class="container text-center">
      <div class="row">
        <div class=" sw" >
         <h1>Smart watches</h1>
        
        </div>
        <div class="col">
          <img src="watch1.jpg" alt="">
          <h4>samsung <br> 456</h4>
          <h5>₹7000</h5>
          <a class="buy" href="#">Buy now</a>
        </div>
        <div class="col">
          <img src="watch2.jpg" alt="">
          <h4>xiaomi <br> 345</h4>
          <h5>₹2500</h5>
          <a class="buy" href="#">Buy now</a>
        </div>
        <div class="col">
          <img src="watch3.jpg" alt="">
          <h4>Galaxy watch4 <br> classic</h4>
          <h5>₹5000</h5>
          <a class="buy" href="#">Buy now</a>
        </div>
        <div class="col">
        
          <a  href="#">  <img src="view.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
  <!-- home appliances -->
  <div class="product">
    <div class="container text-center">
      <div class="row">
        <div class=" sw" >
         <h1>home appliances</h1>
        
        </div>
        <div class="col">
          <img src="wash1.jpg" alt="">
          <h4>LG 6574</h4>
           <h5>₹15000</h5>

          <a class="buy" href="#">Buy now</a>
        </div>
        <div class="col">
          <img src="vaccum1.jpg" alt="">
          <h4>xiaomi vacuum cleaner</h4>
          <h5>₹3500</h5>
          <a class="buy" href="#">Buy now</a>
        </div>
        <div class="col">
          <img src="ref.jpg" alt="">
          <h4>LG refrigerator</h4>
          <h5>₹12000</h5>
          <a class="buy" href="#">Buy now</a>
        </div>
        <div class="col">
        
          <a  href="#">  <img src="view.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
    