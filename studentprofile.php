<?php   
include'db.php';

if(isset($_SESSION['id'])){

}else {
  header("Location: login.php");
}



?>


 


<?php include 'header.php'?>
 <?php include 'nav.php'?>

 <section>
        <h2 class="cart-heading">Mahmoud Farahat</h2>
</section>
  <div class="container ">
    <div class=" d-flex justify-content-between profile">
      <div >
        <img   class="profile-img mb-3" style="width:150px"  src="images/profile pic 1.jpg" alt="">
      </div>
      <div class=" ">
         
          <a href="editstudentprofile.php" class="mb-2 d-block btn btn-outline-danger b">Edit Profile</a>
          <a href="cart.php" class="btn btn-outline-success d-block">My cart</a>
  


      </div>
    </div>
  </div>
  <div class="container ">
    <div class="d-flex justify-content-between profile ">
      <h4 class="align-self-center">Courses you're enrolled in<span>(8)</span></h4>

    </div>
    <div class="d-flex flex-wrap justify-content-between profile">
        <div class="card  my-2" style="width: 15rem;">
            <img src="images/course-logo-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card  my-2" style="width: 15rem;">
            <img src="images/course-logo-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
           <div class="card  my-2" style="width: 15rem;">
            <img src="images/course-logo-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

    </div>


  </div>













</div>



<!-- <?php include 'footer.php'?> -->
