<?php
  require('include/signup.inc.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>OOP LOGIN</title>
  </head>
  <body>
   

  <div class="container">
      <div class="mx-auto w-50 mt-5">
      
       <?php if(isset($errors) && !empty($errors)):?>
        <div class="alert alert-danger" role="alert">
             <ul>
                <?php foreach($errors as $key=> $error) :?>
                    <li><?php echo $error ?></li>
                 <?php endforeach ?>   
            </ul> 
        </div>
        
        <?php endif; ?>    
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="form-group">
    <label>Confirm  Password</label>
    <input type="password" class="form-control" name="confpass">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
</form>
       <div class="d-flex justify-content-between" >
         <h5>Have an account ?</h5>
         <a href="login.php">SignIn</a>
       </div>
      </div>
 
  </div>



    


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>