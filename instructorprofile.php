<?php   
include'db.php';

if(isset($_SESSION['id'])){

}else {
  header("Location: login.php");
}
 
  
 

// $sql = 'SELECT * FROM `courses` WHERE instructor_id= '.$_SESSION['id'] ;
$sql = 'SELECT courses.*, instructors.* , instructors.name as inst_name FROM courses INNER JOIN instructors ON courses.instructor_id = instructors.id where instructor_id ='.$_SESSION['id'] ;
;

$sql_2 ='SELECT COUNT(name) FROM courses WHERE instructor_id= '.$_SESSION['id'];

$op = mysqli_query($con,$sql);
$op_2=mysqli_query($con,$sql_2);
 $op_3 =  mysqli_query($con,$sql);
?>


<?php  require('nav.php') ?>
<div class="container">
    <div class="row profile ">
        <div class="col-8">
            <div class="d-flex justify-content-between">


                <div>INSTRUCTOR</div>
                <a href="editinstructor.php" class="btn btn-outline-danger">Edit Profile</a>
            </div>
            <?php $data_3= mysqli_fetch_assoc($op_3); ?>
            <h2> <?php echo  $data_3['inst_name']; ?></h2>
            <h5 class="mb-4"><?php echo  $data_3['Profession']; ?></h5>
            <div><strong>About me</strong></div>
            <p>
                  <?php echo  $data_3['About_me']; ?>
            </p>


            <div class="d-flex justify-content-between">
                <?php   




$data_2 = mysqli_fetch_assoc($op_2);
foreach($data_2 as  $x_value) {
  echo   '<div class="align-self-center">'.'My courses ('. $x_value .') </div>' ;
   
} 
      
     
  ?>

                <a href="addCourse.php" class="btn btn-outline-success">Add a New Course</a>
            </div>


            <div class="d-flex flex-wrap justify-content-between">
                <?php 
                                           while($data = mysqli_fetch_assoc($op)){
                                           
                                        ?>
                <div class="card  my-2" style="width: 18rem;">
                    <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['name']; ?></h5>
                        <p class="card-text">by <?php echo  $data_3['inst_name']; ?> </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>




                <?php  }    ?>
            </div>
        </div>
        <div class="col-4">
            <img class="profile-img mb-3" src="images/profile pic 1.jpg" alt="">
            <a class="btn btn-outline-primary d-block mb-2">Website</a>
            <a class="btn btn-outline-primary d-block mb-2">Twitter</a>
            <a class="btn btn-outline-primary d-block mb-2">Linkedin</a>

        </div>
    </div>
</div>



<?php include'footer.php' ?>