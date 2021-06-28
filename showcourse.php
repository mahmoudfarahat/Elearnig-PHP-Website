<?php 

 include'db.php';
 $errorMessages  = array();
 if($_SERVER['REQUEST_METHOD'] == "GET"){

  if(isset($_GET['id'])){ 
  $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
 
  if(filter_var($id,FILTER_VALIDATE_INT)){
      // CODE 
   


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
                <div>Created by <a href="instructorprofile.php?id=<?php echo $data_2['id']; ?>"> <?php  echo $data_2['Name'] ?> </a></div>
                <div class="my-3">
                    <span>Last updated</span> <span>English</span>
                </div>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>

                    
                </div>
                <!--  -->
                <h2 class="my-3"> 
                    Reviews
                </h2>
                <div>
                    <div class="border">
                        <div class="row py-3">
                            <div class="col-2">
                                
                                <div class="mx-4" style="background-color: darkkhaki; height: 50px; width: 50px ; border-radius: 50%; "></div>
                            </div>
                            <div class="col-10 ">
                                <h6>Student Name</h6>
                        <div>Stars Rating <span>a week ago</span> </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi voluptatem quaerat vitae accusantium laboriosam, quia quo repellat nostrum culpa minima, expedita quod repellendus? Aliquid nesciunt aliquam similique minus atque tempore.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-4"> 
                <div class="card " style="width: 18rem;">
                    <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php  echo $data['price'] ?>$</h5>
                      <a href="cart.html" class="btn btn-danger cart-btn my-2">Add to cart</a>
                      <a href="payment.php" class="btn btn-outline-primary buy-btn my-1 ">Buy now</a>
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