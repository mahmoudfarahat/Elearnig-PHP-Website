 
<?php 
 include'db.php';
include'functions.php';

$errorMessages  = array();
   $message = ""; 
   if($_SERVER['REQUEST_METHOD'] == "POST"){
 


    $name     = Clean($_POST['name']);
    $email    = Clean($_POST['email']);
    $password = Clean($_POST['password']);
    $role =$_POST[('role')]; 
    if(empty($name)){
   
      $errorMessages['name'] = "Name Field Required";
         
      }else{
            if(strlen($name) < 3){
              $errorMessages['name']  = "Name must be >= 3";
            }elseif (!preg_match("/^[a-zA-Z\s*']+$/",$name)) { 
             
                $errorMessages['name']  = "Only chars allowed";
   
            }    
      }
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

        if ($role =='teacher'){
          $sql = "insert into instructors ( `name`, `email`, `password`) values ('$name','$email','$password')";
        }else if($role =='student'){
          $sql = "insert into students ( `name`, `email`, `password`) values ('$name','$email','$password')";
        }
  
        $op = mysqli_query($con,$sql);
  
        if($op){
             echo $message = "Inserted";
        }else{
            $message = "Try Again";
        }
   
          $_SESSION['message'] = $message;
        header("Location: login.php");
       }else{
          $_SESSION['error_messsage'] = $errorMessages;
          // header("Location: add.php");
  
  
       }
      }
?>

<?php include 'header.php'?>
    <?php require 'nav.php'?>

     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7   "   action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          <h4>Sign Up and Start Learning!</h4>
          <hr>
            
        <div class="mb-3">
      
      <input placeholder="name" name="name" type="text" class="form-control"  <?php if(isset($errorMessages["name"])) echo "style='box-shadow: 0 .5px 1px rgba(0, 0, 0, 0.045) inset, 0 0 5px  red '"  ?>     >
         <?php     if (isset($errorMessages["name"])) echo '<div class="text-danger">' .$errorMessages["name"]. '</div>'  ;  ?>
      </div>

    <div class="mb-3">
      <input placeholder="email" name="email" type="text" class="form-control" <?php if(isset($errorMessages["email"])) echo "style='box-shadow: 0 .5px 1px rgba(0, 0, 0, 0.045) inset, 0 0 5px  red '"  ?>   >
      <?php     if (isset($errorMessages["email"])) echo '<div class="text-danger">' .$errorMessages["email"]. '</div>'  ;  ?>
    </div>
    <div class="mb-3">
      <input placeholder="Password" name="password" type="password" class="form-control"  <?php if(isset($errorMessages["password"])) echo "style='box-shadow: 0 .5px 1px rgba(0, 0, 0, 0.045) inset, 0 0 5px  red '"  ?>     >
      <?php     if (isset($errorMessages["password"])) echo '<div class="text-danger">' .$errorMessages["password"]. '</div>'  ;  ?>

    </div>
    
             
           
            <div class=" mb-3 d-flex" >
                <div class=" form-check">
                          <input class=" form-check-input" type="radio" name="role" value="student"  checked>
                          <label class="form-check-label"  >Student</label> 
                </div>
                <div class="mx-3 form-check">
                          <input class="form-check-input" type="radio" name="role" value="teacher"  >
                          <label class="form-check-label"  >Teacher</label>
                </div>
            </div>

            <button type="submit" class="btn btn-danger submit-btn">Sign Up</button>
            <div class="my-3">By signing up, you agree to our Terms of Use and Privacy Policy.</div>
            <hr>
            <div class="mb-5">Already have an account? <a href="login.php"> Log In</a></div>
          </form>

     </div>



   




     <?php include 'footer.php' ?>