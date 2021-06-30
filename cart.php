 <?php  
 
 include'db.php';
  if (isset($_SESSION['id']) && $_SESSION['role'] == 2   ){

  }elseif(isset($_SESSION['id']) && $_SESSION['role'] == 1 ){
  
    header("location:index.php");

  }else{
      header("location:login.php");
  }
 
 
//  $sql = 'SELECT courses.* , instructors.name as inst_name , instructors.id as inst_id FROM courses join instructors on  instructors.id =  courses.instructor_id';
 $sql = 'SELECT courses.* , cart_relation.* FROM courses JOIN cart_relation ON cart_relation.course_id = courses.id WHERE student_id = '.$_SESSION['id'];
  
 $sql_2 ='SELECT COUNT(course_id) FROM cart_relation WHERE student_id = '.$_SESSION['id'];
 



$op = mysqli_query($con,$sql);
    
$op_2 = mysqli_query($con,$sql_2);
 
 
 $data_2 = mysqli_fetch_assoc($op_2);
 
   
   
 ?>
 <?php include('header.php'); ?>

 <?php require('nav.php'); ?>


 <section>
     <h2 class="cart-heading ">Shopping Cart</h2>
 </section>
 <div class="container">
     <div class="row card-cart my-5 ">

         <div class="col-9">

             <h6 class="d-flex flex-row-reverse px-5"><?php echo $data_2['COUNT(course_id)'] ?> Course in Cart</h6>
             <?php  while($data = mysqli_fetch_assoc($op)){   ?>

             <div class="card mb-3" style="max-width: 840px;">
                 <div class="row g-0">
                     <div class="col-md-4">
                         <img src="uploads/<?php echo $data['cover'];?>" height="200px"
                             class="card-img-top p-0 img-padding" alt="...">
                     </div>
                     <div class="col-md-8">
                         <div class="row">
                             <div class="col-8">
                                 <div class="card-body">
                                     <h5 class="card-title"><?php echo $data['name'] ?> </h5>
                                     <p class="card-text">This is a wider card with supporting text below as a natural
                                         lead-in
                                         to additional content. This content is a little bit longer.</p>
                                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                 </div>
                             </div>
                             <div class="col-4 align-self-center ">
                                 <a href='deletecart.php?id=<?php echo $data['id']; ?>'
                                     class="  text-center  d-block  ">Delete</a>
                                 <hr class="m-0">
                                 <a href="payment.php" class=" text-center   d-block">Buy</a>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
             <?php  }   ?>
         </div>


         <div class="col-3">
             <h6>total</h6>
             <h4>$13.99</h4>
             <h6>&94.99</h6>
             <a href="" class="btn btn-danger btn-lg d-block">Checkout</a>

         </div>
     </div>
 </div>

 <?php include'footer.php' ?>