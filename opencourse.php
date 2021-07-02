<?php  


include'db.php';










$errorMessages  = array();
 if($_SERVER['REQUEST_METHOD'] == "GET"){

  if(isset($_GET['id'])){ 
  $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
 
  if(filter_var($id,FILTER_VALIDATE_INT)){
      // CODE 
   
$_SESSION['courses_id']= $id;

      $sql = "select * from courses where id=".$id;

     
    

      $op  = mysqli_query($con,$sql);
print_r($op);
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
      print_r($_SESSION['message']);
  }else{
      $data = mysqli_fetch_assoc($op);
  }

  // $sql_2 = "select * from instructors where id=".$data['instructor_id'];

  // $op_2  = mysqli_query($con,$sql_2);

  // $data_2 = mysqli_fetch_assoc($op_2);

 


  // $sql_3 = 'SELECT students.* , reviews.*  FROM reviews JOIN students ON reviews.student_id =students.id WHERE reviews.course_id ='.$id;


  // $op_3 =mysqli_query($con,$sql_3);

  

  // if($data['instructor_id'] == $_SESSION['id']){

    
  // }else{
  //     header('location:login.php');
  // }


//////////////////////////



    



}


?>
 
 
 
















<?php    




include'nav.php' 

?>








    
  <div class="container my-4">
    <div class="row">
      <div class="col-8">
        <div>
          <video controls width="881">
            <source src="uploads/1.mp4"
            type="video/mp4">
              Sorry, your browser doesn't support embedded videos.
        </video>
        </div>
     
      <div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
      </div>
      </div>
      <div class="col-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               Part 1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Part 2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Part 3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                 
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Part 4
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include'footer.php' ?>