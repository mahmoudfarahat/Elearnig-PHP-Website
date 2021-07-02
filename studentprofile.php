<?php   
include'db.php';

if(isset($_SESSION['id'])){

}else {
  header("Location: login.php");
}




$sql = 'SELECT courses.* , cart_relation.* FROM courses JOIN cart_relation ON cart_relation.course_id = courses.id WHERE bought=1 and student_id = '.$_SESSION['id'] ;
  
// $sql_2 ='SELECT COUNT(course_id) FROM cart_relation WHERE student_id = '.$_SESSION['id'];



$op = mysqli_query($con,$sql);
    
// $op_2 = mysqli_query($con,$sql_2);
 
 
//  $data_2 = mysqli_fetch_assoc($op_2);
 

$sql_2 = 'SELECT *  FROM students where id = '.$_SESSION['id'] ;
$op_2 = mysqli_query($con,$sql_2);

$data_2=mysqli_fetch_assoc($op_2);
?>


 


<?php include 'header.php'?>
 <?php include 'nav.php'?>

 <section>
        <h2 class="cart-heading"><?php echo $data_2['name']  ?></h2>
</section>
  <div class="container ">
    <div class=" d-flex justify-content-between profile">
      <div >
      <?php 
                                        
                                        if(isset($data_2['picture'])){
                                            $photo= $data_2['picture'];
                                        }else{
                                            $photo ='one.jpg';
                                        }
                                        ?>
        <img   class="profile-img mb-3" style="width:150px"  src="uploads/<?php echo $data_2['picture']  ?>" alt="">
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
     <?php  while   (  $data = mysqli_fetch_assoc($op))   {         ?>                        
    <div class="card  my-2" style="width: 15rem;">
            <img src="uploads/<?php echo $data['cover'] ?>"   width="20px" height="200px"   class="card-img-top p-0" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data['name'] ?></h5>
            </div>
          </div>
     <?php }           ?>                        
      
        

    </div>


  </div>













</div>



<!-- <?php include 'footer.php'?> -->
