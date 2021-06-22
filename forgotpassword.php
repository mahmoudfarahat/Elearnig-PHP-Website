 
<?php include('header.php')   ?>

    <?php require('nav.php')   ?>
     
     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7">
          <h4>Forgot Password</h4>
          <hr>
            <div class="mb-3 ">
              <input type="email" placeholder="Email "  class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
           
            <button type="submit" class="btn btn-danger submit-btn">Reset Password</button>
            <span>or <a href="https://localhost/elearnproject/Login.php">Log in</a></span>
            
            
          </form>

     </div>
     <?php include'footer.php' ?>