<?php   
include'db.php';
 
if(isset($_SESSION['id']) && $_SESSION['role'] =='1' ){

   

 if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['id'])){ 
        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
        if($id == $_SESSION['id'] ){
            $private_btn_display="";
        }else {
            $private_btn_display="d-none";
        }
    }

 }

}





 




$errorMessages  = array();
 
if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['id'])){ 
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
   
    if(filter_var($id,FILTER_VALIDATE_INT)){
        // CODE 
        $sql = 'SELECT * FROM `instructors` WHERE id= '.$id ;
        $sql_2 = 'SELECT * FROM `courses` WHERE instructor_id= '.$id ;
        $sql_3 ='SELECT COUNT(name) FROM courses WHERE instructor_id= '.$id;

        // $sql = "select * from courses where id=".$id;
        $op_2  = mysqli_query($con,$sql_2);

$op = mysqli_query($con,$sql);
$op_2  = mysqli_query($con,$sql_2);

$op_3=mysqli_query($con,$sql_3);

        $count = mysqli_num_rows($op);
        
        $private_btn_display="d-none";

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
         
    }

}  



 
 //instructor
//   $sql = 'SELECT * FROM `instructors` WHERE id= '.$_SESSION['id'] ;
  //courses
//   $sql_2 = 'SELECT * FROM `courses` WHERE instructor_id= '.$_SESSION['id'] ;
    //count
// $sql_3 ='SELECT COUNT(name) FROM courses WHERE instructor_id= '.$_SESSION['id'];

//instructor
// $op = mysqli_query($con,$sql);
//courses
// $op_2 = mysqli_query($con,$sql_2);

//count
// $op_3=mysqli_query($con,$sql_3);


  
?>


<?php  require('nav.php') ?>
<div class="container">
    <div class="row profile ">
        <div class="col-8">
            <div class="d-flex justify-content-between">


                <div>INSTRUCTOR</div>
                <a href="editinstructor.php" class="btn btn-outline-danger <?php echo $private_btn_display ?>">Edit Profile</a>
            
            </div>
            <?php $data_3= mysqli_fetch_assoc($op); ?>
            <h2> <?php echo  $data_3['Name']; ?></h2>
            <h5 class="mb-4"><?php echo  $data_3['Profession']; ?> </h5>
            <div><strong>About me</strong></div>
            <p>
                <?php echo  $data_3['About_me']; ?>
            </p>


            <div class="d-flex justify-content-between">
                <?php   




$data_2 = mysqli_fetch_assoc($op_3);
foreach($data_2 as  $x_value) {
  echo   '<div class="align-self-center">'.'My courses ('. $x_value .') </div>' ;
   
} 
      
     
  ?>

                <a href="addCourse.php" class="btn btn-outline-success <?php echo $private_btn_display ?> ">Add a New Course</a>
            </div>


            <div class="d-flex flex-wrap justify-content-between">
                <?php 
                                           while($data = mysqli_fetch_assoc($op_2) ){
                                           
                                        ?>
                <div class="card  my-2" style="width: 18rem;">
                <img src="uploads/<?php echo $data['cover'];?>" width="40px" height="250px"  class="card-img-top" >
                   
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['name']; ?></h5>
                        <a href="">By
                        <?php echo $data_3['Name'];?>
                         
                        </a>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>




                <?php  }    ?>
            </div>
        </div>
        <div class="col-4"> 
        <img src="uploads/<?php echo $data_3['picture'];?>" width="40px" class="card-img-top profile-img" >
           
            <a class="btn btn-outline-primary d-block mb-2">Website</a>
            <a class="btn btn-outline-primary d-block mb-2">Twitter</a>
            <a class="btn btn-outline-primary d-block mb-2">Linkedin</a>

        </div>
    </div>
</div>



<?php include'footer.php' ?>