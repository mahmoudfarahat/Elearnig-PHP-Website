 
  <?php 
  
  
  
   
 include'db.php';
 if (isset($_SESSION['id']) && $_SESSION['role'] == 2   ){


 }elseif(isset($_SESSION['id']) && $_SESSION['role'] == 1 ){
 
   header("location:index.php");

 }else{
     header("location:login.php");
 }
  
 
 
 include'functions.php';  
   


 $errorMessages  = array();
 if($_SERVER['REQUEST_METHOD'] == "GET"){

  if(isset($_GET['id'])){ 
  $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
 
  if(filter_var($id,FILTER_VALIDATE_INT)){
      // CODE 
   
$_SESSION['courses_id']= $id;

      $sql = "select * from courses where id=".$id;

     
    

      $op  = mysqli_query($con,$sql);

      $count = mysqli_num_rows($op);


      if($count == 0){
          $message = "Invalid Id";  
          $errorMessages['id'] = 1 ;
  
        }
  

      }else{
          $message = "InValid id value";
          $errorMessages['id'] = 1 ;
      }

  }else{
      $message     = "Id Not Founded";  
      $errorMessages['id'] = 1 ;
    }


    if(count($errorMessages) > 0 ){
      $_SESSION['message'] = $message;
      // header("Location: display.php");
      echo 'dsdsds';
  }else{
      $data = mysqli_fetch_assoc($op);
  }
   
 }





















   
   
   if($_SERVER['REQUEST_METHOD'] == "POST"){
     // CODE ... 
 
 
     $coupon    = Clean($_POST['coupon']);
     $id       = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
     $errorMessages = [];
 
 
 
       // Validate email 
       if(empty($coupon)){
         $errorMessages['coupon'] = "coupon Field Required";
      }else{
       
       
       
      }
      
      
       if(count($errorMessages) == 0){
 
       
        
           
         $sql_2 = "select * from  courses  where coupon='$coupon' and id=".$id ;
     
            $op_2 = mysqli_query($con,$sql_2);
          
            print_r($op_2);
       
       
         $count_2 = mysqli_num_rows($op_2);
          
         
         if($count_2 == 1){
             // login code .... 
             
          //  $data = mysqli_fetch_assoc($op_2);

          $sql_7 ="select * from cart_relation   WHERE course_id=$id and student_id=".$_SESSION['id']  ;
        
          $op_7 = mysqli_query($con,$sql_7);

          $data_7 = mysqli_fetch_assoc($op_7);
print_r($op_7);
          echo '1';

if (isset($data_7)){
  $sql_3 ="UPDATE `cart_relation` SET `bought`=1 , `oncart`=0  WHERE course_id=$id and student_id=".$_SESSION['id'];
        
  $op_3 = mysqli_query($con,$sql_3);
  echo '2';

}else{
  $sql_4 ="INSERT INTO `cart_relation`(`course_id`, `student_id` , `bought`, `oncart` ) VALUES ( $id   ,".$_SESSION['id'].",  1 , 0  )";

  $op_4 = mysqli_query($con,$sql_4);
  echo '3';
}

       
          
 
          //  $_SESSION['Name'] =  $data['Name'] ;

          //  $role = 1;
 
          //  $_SESSION['role'] =$role;
            //  header("Location: opencourse.php?id=".$id)   ;
 
         } 
           
         else{
           $errorMessages['coupon']  = "Invalid coupon";
           print_r( $errorMessages['coupon']);
             // echo 'Error in Email || Password try again ';
         }
 
       }else{
 
        echo '4 ';
         // foreach($errorMessages as $key => $messages){
 
         //     echo '*'.$key.' :  '.$messages.'<br>';
         // }
 
 
 
 
       }
 
 
 
 
 
 
 
   }
 
 
 
 
 
 
 
 
        
  
  
  
  
  
  
  
  
  
  
  
  
  
  include'header.php'
   ?>
    <?php require('nav.php')  ?>
    <div class="container my-3">
      <div class="row payment-design">
        <div class="col-7">
          <h4>Check out</h4>
          <h5 class="my-3">Billing Address</h5>
          <div class="dropdown">
            <button
              class="btn btn-secondary dropdown-toggle"
              type="button"
              id="dropdownMenuButton1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Country
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

          <div class="form-check my-3">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">
              New Payment Card
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="flexRadioDefault2"
              checked
            />
            <label class="form-check-label" for="flexRadioDefault2">
              Pay pal
            </label>
          </div>

          <form class="p-3 mt-3 border">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Name on Card"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Card Number"
              />
            </div>

            <div class="row d-flex justify-content-between">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="MM / YY" />
                <input
                  type="text"
                  class="form-control my-3"
                  placeholder="Zip/postal Code"
                />
              </div>
              <div class="mb-3 col-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Security Code"
                />
              </div>
            </div>

            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
              </label>
            </div>
          </form>
          <h3 class="mt-3">Order Details</h3>
        </div>
        <div class="col-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Summary</h5>
              <h6>Original price <span>$94</span></h6>
              <h6>Coupon discounts <span>-$81</span></h6>
              <hr />
              <h6>Total: <span>$13.99</span></h6>
              <p></p>

              <p class="card-text">
                By completing your purchase you agree to these
                <a href="">Terms of Service</a>.
              </p>
              <a href="#" class="btn btn-lg btn-danger d-block"
                >Complete Payment</a
              >
            </div>
          </div>
          <div class="card my-3">
            <div class="card-body">
              <h5 class="card-title">Do you have a Coupon?</h5>
               

              <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"   method="post">
              
              <input name="coupon" placeholder="Coupon" class="form-control   "  <?php if(isset($errorMessages["coupon"])) echo "style='box-shadow: 0 .5px 1px rgba(0, 0, 0, 0.045) inset, 0 0 5px  red '" ?> >
              <input type="hidden" name="id" value="<?php echo $data['id'];?>" >
               <?php     if (isset($errorMessages["coupon"])) echo '<div class="text-danger mb-1">' .$errorMessages["coupon"]. '</div>'  ;  ?>
              <button   class="btn btn-lg btn-success d-block my-1"
                >Complete Process</button
              >
              </form>
             
              
            </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include'footer.php' ?>