<?php include'header.php' ?>

    <?php  require('nav.php')   ?>
     
     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7">
          <h4>Log in to Your Account</h4>
          <hr>
          <button type="submit" class="btn btn-primary submit-btn mb-3">Continue with Facebook</button>
          <button type="submit" class="btn btn-outline-primary submit-btn mb-3">Continue with Google</button>
           
          <div class="mb-3 ">
              <input type="email" placeholder="Email "  class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <div class="mb-3">
              <input type="password" placeholder="Password"  class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary submit-btn">Log In</button>
            <div class="my-3">or <a href="https://localhost/elearnproject/forgotpassword.php">Forgot Password</a></div>
            <hr>
            <div>Don't have an account? <a href="https://localhost/elearnproject/signup.php">Sign up</a></div>
          </form>

     </div>
     <?php include'footer.php' ?>