
    <?php
        include 'config.php';
    ?>
  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"> 
    <title>Signup |E-Bank</title>
</head>
<body>
     <!-- Header -->
     <?php
            include 'navbar.php';
        ?>

        <div class="content cont">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <br><br><br>
                  <br><br><br>
               
                  <img src="img/user.png" class="img-responsive signup-image" alt="Image">
              </div>
              <div class="col-md-6">
                 <br><br><br>
                  <br><br><br>
                  <h3>Sign Up</h3>
                  <form  action="user_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                              
                            </div>
                           <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                            </div>
                            
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Balance" name="balance" required>
                            </div>
                            
                           
                                
                            <div class="btn-signup">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                      <br>
                      <div class="btn-signup">
                              <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </form>
              </div>
            </div>
            </div>
        </div>
       <?php
       include 'footer.php';
       ?>
</body>
</html>