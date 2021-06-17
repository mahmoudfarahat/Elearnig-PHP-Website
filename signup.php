<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">

 

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/signup.css">
 
</head>
<body>
    <?php require('nav.php')   ?>
     
     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7">
          <h4>Sign Up and Start Learning!</h4>
          <hr>
            <div class="mb-3">
                <input type="text" placeholder="Full Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3 ">
              <input type="email" placeholder="Email "  class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <div class="mb-3">
              <input type="password" placeholder="Password"  class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">  
              <label class="form-check-label" for="exampleCheck1">Yes! I want to receive emails</label>
            </div>
            <button type="submit" class="btn btn-danger submit-btn">Sign Up</button>
            <div class="my-3">By signing up, you agree to our Terms of Use and Privacy Policy.</div>
            <hr>
            <div>Already have an account? <a href="https://localhost/elearnproject/login.php"> Log In</a></div>
          </form>

     </div>
</body>
</html>