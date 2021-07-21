<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
    body{
        background-image: linear-gradient(#2286D7,#d4f6fa);
    }
    
        button{
                    position: relative;
            display: inline-block;
            padding: 12px 36px;
            
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 2px;
            border-radius: 8px;
            background-color: #9cfe9c;
            background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
                }
        #banner_image{
  padding: 200px 900px 150px 0px;
  text-align:left;
  font-size:40px;
  color:#020939;
  font-style:oblique;
  background:url("img/bg3.jpg") no-repeat center center;
  background-size:cover;

}
.centered {
  position: absolute;
  top: 35%;
  left: 60%;
  transform: translate(68%, -44%);
  font-weight:bold;
  align:float-left;
  font-size:285%;
}
        
 </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>
  <div id="banner_image">
          <div class="container">
            <div class="centered" >Sparks<br>Bank</div>
          </div>
          
       </div>

    <div class="container-fluid">
        <!-- Introduction section -->
        
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md-12 ">
                <br><br>
                <img src="img/trans1.png" class="float-left" >
                <br>
                <div>
                    <div>
                    </div>
                    <div>
                    </div>
                   
                
                    <div class="position-relative" style="color: green;">
                        
                        <img src="img/view.png" class="float-right" style ="width:13%">   
                        <h1>Make Transaction</h1> 
                        <a href="transfermoney.php" target="_blank"><button>Transfer Money    </button></a>  
                    </div>
                  <div class="position-relative" style="color: green;">
                    <h1>Your transactions</h1> 
                    <a href="transactionhistory.php"><button style ="right3%">Transaction History</button></a>       
                  </div>
                </div>
                


        </div>
    </div>
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
