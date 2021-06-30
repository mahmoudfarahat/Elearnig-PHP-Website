<?php 

 include'db.php';

 //hide private sections / for all students only

 

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
  $sql_2 = "select * from instructors where id=".$data['instructor_id'];

  $op_2  = mysqli_query($con,$sql_2);

  $data_2 = mysqli_fetch_assoc($op_2);

 


  $sql_3 = 'SELECT students.* , reviews.*  FROM reviews JOIN students ON reviews.student_id =students.id WHERE reviews.course_id ='.$id;


  $op_3 =mysqli_query($con,$sql_3);

  

  if(isset($_SESSION['id']) && $_SESSION['role']  == 2){

    $review_display_add ='<textarea name="review" class="form-control mb-3" placeholder="Add your review" name="" id="" cols="30" rows="5"></textarea>';
    $review_display_btn = '<div class=" d-flex flex-row-reverse "><button   class="btn btn-primary ">Sumbit your Review</button></div>';
  }


//////////////////////////



    



}

include'functions.php';

$errorMessages  = array();
   $message = "";  


 
   if($_SERVER['REQUEST_METHOD'] == "POST"){

    $review     = Clean($_POST['review']);  
    $id       = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);

      echo  $_SESSION['id'].'_'; 
      echo $id;
  
    if(empty($review)){
   
      $errorMessages['review'] = "review Field Required";
         
      }else{
            if(strlen($review) < 3){
              $errorMessages['review']  = "review must be >= 3";
            }elseif (!preg_match("/^[a-zA-Z\s*']+$/",$review)) { 
                $errorMessages['review']  = "Only chars allowed";
            }    
      }
   
   
      if(count($errorMessages) == 0){

        $student_id = $_SESSION['id'];
        
        $course_id = $data['id'];
 
          $sql_4 = "insert into reviews ( `reviews`, `student_id`, `course_id`) values ('$review', $student_id ,$id)";
        
  
        $op_4 = mysqli_query($con,$sql_4);
        
     
        if($op_4){
             echo $message = "Inserted";
        }else{
          echo  $message = "Try Again";
        }
   
          $_SESSION['message'] = $message;
       
          header("Location: showcourse.php?id=.$id");
  
         }else{
           $_SESSION['error_messsage'] = $errorMessages;
           header("Location: showcourse.php?id=.$id");
          
            
      // 
       }
      } 
    
   
















?>



<?php include'header.php' ?>
<?php  require('nav.php') ?>

<div class="container    my-5">
    <div class="row information-container">
        <div class="col-8">
            <!-- Start Breadcrumb -->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Development</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="">Web Development</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="">Javascript</a></li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            <h2>
                <?php  echo $data['name'] ?>
            </h2>
            <!-- <p>
                    The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!
                </p> -->
            <div>Created by <a href="instructorprofile.php?id=<?php echo $data_2['id']; ?>">
                    <?php  echo $data_2['Name'] ?> </a></div>
            <!-- <div class="my-3">
                <span>Last updated</span> <span>English</span>
            </div> -->
            <div class="d-flex my-3">
                <button type="button" class="btn btn-outline-dark">Wishlist</button>
                <button type="button" class="btn btn-outline-dark mx-2">Share</button>
                <button type="button" class="btn btn-outline-dark">Gift this course</button>
            </div>

            <div class="border">
                <div class="mx-2 my-2">What you'll learn</div>
                <ul>
                    <li class="my-3"><?php  echo $data['target'] ?></li>
                </ul>
            </div>
            <!--  -->
            <h2 class="my-4">Course content</h2>
            <div class=" ">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--  -->
            <h2 class="my-3">
                Reviews
            </h2>
            <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mb-3  ">
                <!-- <label class="form-control mb-3"  for=""> add your review</label> -->
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                <?php if(isset(  $review_display_add)) echo  $review_display_add ?>
                <?php if(isset(  $review_display_btn)) echo  $review_display_btn ?>

            </form>
            <div>
                <?php  while($data_3 = mysqli_fetch_assoc($op_3)){   ?>
                <div class="border mb-3">
                    <div class="row py-3">

                        <div class="col-2">
                            <div class="mx-4" style=" ; height: 50px; width: 50px ; border-radius: 50%; ">
                                <img src="uploads/<?php echo $data_3['picture'];?>"
                                    class="card-img-top p-0 img-padding rounded-circle" alt="...">
                            </div>
                        </div>
                        <div class="col-10 ">
                            <h6><?php echo $data_3['name']; ?></h6>
                            <!-- <div>Stars Rating <span>a week ago</span> </div> -->
                            <p><?php echo $data_3['reviews']; ?></p>
                        </div>

                    </div>

                </div>
                <?php  }   ?>
            </div>
        </div>
        <div class="col-4">
            <div class="card " style="width: 18rem;">
                <img src="uploads/<?php echo $data['cover'];?>" class="card-img-top p-0 img-padding" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $data['price'] ?>$</h5>
                    <?php  
 
 if(isset($_SESSION['id']) &&  $_SESSION['role'] == 2 ){
    
     $buy_cart="payment.php";
 
 }else if(isset($_SESSION['id']) &&  $_SESSION['role'] == 1){
 
 $buy_cart_display = 'd-none';
 
 }
   else {
       # code...
       $buy_cart="login.php";
      
   }
 
 ?>

                    <form action="cart_action.php" method="post">
                        <button class="btn btn-danger cart-btn my-2 <?php   echo $buy_cart_display  ?>  ">Add to
                            cart</button>
                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                    </form>

                    <div class=" my-2 alert alert-success text-center">Sign in as a Student <br> to buy the course</div>
                    <a href="<?php   echo $buy_cart  ?>"
                        class="btn btn-outline-primary buy-btn my-1 <?php   echo $buy_cart_display  ?>   ">Buy now</a>
                    <p class="text-center">30-day Money-Back Gurantee</p>
                    <p>This course includes:</p>
                    <ul>
                        <li>28 hours on-demand video</li>
                        <li>2 articles</li>
                        <li>Full lifetime access</li>
                        <li>Access on mobilr and TV</li>
                        <li>Certificate of completion</li>
                    </ul>
                    <p class="text-center">Apply Coupon</p>
                </div>
            </div>
        </div>
    </div>




</div>



<?php include'footer.php' ?>