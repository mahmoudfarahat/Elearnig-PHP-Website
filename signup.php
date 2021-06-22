
<?php include 'header.php'?>
    <?php require 'nav.php'?>

     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7">
          <h4>Sign Up and Start Learning!</h4>
          <hr>
            <div class="mb-3">
                <input type="text" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3 ">
              <input type="email" placeholder="Email "  class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <input type="password" placeholder="Password"  class="form-control" id="exampleInputPassword1">
            </div>
            <div class=" mb-3 d-flex" >
            <div class=" form-check">
  <input class=" form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Student
  </label>
</div>
<div class="mx-3  form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
   Teacher
  </label>
</div>

            </div>

            <button type="submit" class="btn btn-danger submit-btn">Sign Up</button>
            <div class="my-3">By signing up, you agree to our Terms of Use and Privacy Policy.</div>
            <hr>
            <div class="mb-5">Already have an account? <a href="login.php"> Log In</a></div>
          </form>

     </div>




     <?php include 'footer.php'?>