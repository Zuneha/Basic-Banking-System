<!doctype html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online-Bank</title>
         <link href="css/style.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
       <?php
       include 'navbar.php';
       ?>
        
  
      <div class="container-fluid">
      <!-- Introduction section -->
              <div id="banner_content">
                            
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <center>
                  <h1>Welcome to</h1>
                  <h1>Online Banking</h1>
                  <br>
                  </center>
                </div>
              </div>
           <div class="Banner-image">
               
               <div class=" col-md-4 col-sm-6 img text-center">
                  <img src="img/vector-online-banking-conceptual-illustration-design.jpg" class="img-fluid pt-2">
             
                  </div>
             </div>  
             
            </div>

      <!-- Activity section -->
      <div class='cont'>
           <div class="row text-center">
                    <div class=" col-md-4 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/user.png" class="img-fluid">
                        <br>
                        <a href="createuser.php"><button>Create a User</button></a>
                    </div>
                    </div>
               
               
               <div class=" col-md-4 col-sm-6 ">
                    <div class="thumbnail">
                         <img src="img/download.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                    </div>
               
               <div class=" col-md-4 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/images.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
                    </div>
    
           </div>
      </div>
      <?php
             include 'footer.php';
             ?>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>