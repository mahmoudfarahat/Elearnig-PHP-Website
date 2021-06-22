<?php 
include'db.php';
include'functions.php';  
  
  
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // CODE ... 


    $email    = Clean($_POST['email']);
    $password = Clean($_POST['password']);
    
    $errorMessages = [];



      // Validate email 
      if(empty($email)){
        $errorMessages['email'] = "Email Field Required";
     }else{
      
      
      if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){    
          $errorMessages['email']  = "Invalid Email";
      }
  
     }
  
  
  
     if(empty($password)){
         $errorMessages['password'] = "Password Field Required";
     }else{
  
         if(strlen($password) < 6){
          $errorMessages['password'] = "Password Must Be >= 6 "; 
         }
  
     }


 
      if(count($errorMessages) == 0){

      
        $password = sha1($password); 
         
        $sql = "select * from  instructors where email='$email' and password = '$password' " ;

        $sql_2 = "select * from students  WHERE  email='$email' and password = '$password' " ;
      
       
          $op = mysqli_query($con,$sql);
         
          $op_2 = mysqli_query($con,$sql_2);
      
      
        $count = mysqli_num_rows($op);
        $count_2 = mysqli_num_rows($op_2);

        print_r($count);
        print_r($count_2);
        if($count == 1){
            // login code .... 

          $data = mysqli_fetch_assoc($op);
          
          $_SESSION['id']   =  $data['id'] ;
          $_SESSION['Name'] =  $data['Name'] ;
       
            header("Location: index.php")   ;

        }else if($count_2 == 1 ) {
          $data = mysqli_fetch_assoc($op_2);
          
          $_SESSION['id']   =  $data['id'] ;
          $_SESSION['Name'] =  $data['Name'] ;
       
            header("Location: index.php")   ;
        }   
        else{
            echo 'Error in Email || Password try again ';
        }

      }else{


        foreach($errorMessages as $key => $messages){

            echo '*'.$key.' :  '.$messages.'<br>';
        }




      }







  }








         ?>
     
<?php 
include'header.php';  
  include'nav.php'; ?>
     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"   method="post"  enctype ="multipart/form-data">
          <h4>Log in to Your Account</h4>
          <hr>
          <button type="submit" class="btn btn-primary submit-btn mb-3">Continue with Facebook</button>
          <button type="submit" class="btn btn-outline-primary submit-btn mb-3">Continue with Google</button>
           
          <div class="mb-3 ">
              <input type="email" placeholder="Email " name="email" class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>  
            <div class="mb-3">
              <input type="password" placeholder="Password" name="password"  class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary submit-btn">Log In</button>
            <div class="my-3">or <a href="https://localhost/elearnproject/forgotpassword.php">Forgot Password</a></div>
            <hr>
            <div>Don't have an account? <a href="https://localhost/elearnproject/signup.php">Sign up</a></div>
          </form>

     </div>
     <?php include'footer.php' ?>