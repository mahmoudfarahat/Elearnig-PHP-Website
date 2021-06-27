 <?php 
 
include 'db.php';
 include 'functions.php';


$sql = 'SELECT * FROM `instructors` WHERE id= ' . $_SESSION['id'];
//courses
$sql_2 = 'SELECT * FROM `courses` WHERE instructor_id= ' . $_SESSION['id'];
//count
$sql_3 = 'SELECT COUNT(name) FROM courses WHERE instructor_id= ' . $_SESSION['id'];

//instructor
$op = mysqli_query($con, $sql);
//courses
$op_2 = mysqli_query($con, $sql_2);

//count
$op_3 = mysqli_query($con, $sql_3);

 
$data= mysqli_fetch_assoc($op); 
 
?>




<?php  $errorMessages  = array();
   $message = ""; 
   if($_SERVER['REQUEST_METHOD'] == "POST"){
 


    $name     = Clean($_POST['name']);
    $profession    = Clean($_POST['Profession']);

    $Website = Clean($_POST['Website']);
    $Twitter = Clean($_POST['Twitter']);
    $Linkedin = Clean($_POST['Linkedin']);


    // $role =$_POST[('role')]; 
    $oldImage  = $_POST['oldImage'];
$image     = '';


    if(empty($name)){
   
      $errorMessages['name'] = "Name Field Required";
         
      }else{
            if(strlen($name) < 3){
              $errorMessages['name']  = "Name must be >= 3";
            }elseif (!preg_match("/^[a-zA-Z\s*']+$/",$name)) { 
             
                $errorMessages['name']  = "Only chars allowed";
   
            }    
      }
    //   if(empty($email)){
    //     $errorMessages['email'] = "Email Field Required";
    //  }else{
    //   if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){    
    //       $errorMessages['email']  = "Invalid Email";
    //   }
   
    //  }
 

 
     
    if(!empty($_FILES['image']['name'])){

        $fileTempPath  = $_FILES['image']['tmp_name'];
        $fileName      = $_FILES['image']['name'];
        // $fileSize      = $_FILES['uploadedFiles']['size'];
        // $filetype      = $_FILES['uploadedFiles']['type'];



        $fileExtension =   explode(".",$fileName);
        
        $newName = rand().time().'.'.strtolower($fileExtension[1]);

         $allowedExtensions = array('png','jpg');

         if(in_array($fileExtension[1],$allowedExtensions)){

          // code ....
          
          $uploaded_folder = "./uploads/";

          $desPath = $uploaded_folder.$newName;

         if(!move_uploaded_file($fileTempPath,$desPath)){
            $errorMessages['image'] = "Error in Uplading file";  
         }else{
             $image =  $newName;

             // delete old image .... 
             if(file_exists('./uploads/'.$oldImage)){
                 unlink('./uploads/'.$oldImage);
             }



         }


         }else{

            $errorMessages['image'] =  'Not Allowed Extension';
         }
        }else{
$image  = $oldImage;
           
        }


      if(count($errorMessages) == 0){

          
          $sql_4= "update instructors set name = '$name' , Profession = '$profession' , Website='$Website' , Twitter='$Twitter'  , Linkedin='$Linkedin'  , picture='$image' where id=".$_SESSION['id']; 
  
        $op_4 = mysqli_query($con,$sql_4);
  
        if($op_4){
             echo $message = "Updated";
            
        }else{
            $message = "Try Again";
        }
   
          $_SESSION['message'] = $message;
          header("Location: editinstructor.php");
       }else{
          $_SESSION['error_messsage'] = $errorMessages;
          // header("Location: add.php");
  
  
       }
      }
?>







































<?php  
require 'nav.php';
include 'header.php'; ?>



 
 <div class="container">
     <div class="row profile ">
         <div class="col-5">
             <h2>Edit Profile</h2>
             <form class=" p-2 border"    action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"    enctype="multipart/form-data"        >
                 <div class="mb-3">
                     <input placeholder="Name"  value="<?php  echo $data['Name'];?>"  name="name" class="form-control">
                 </div>
                 <div class="mb-3 ">
                     <input placeholder="Profession" value="<?php  echo $data['Profession'];?>"   type="text" class="form-control" name="Profession"
                         id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                     <textarea placeholder="About me" name="" id="" cols="30" class="form-control" rows="5"><?php  echo $data['About_me'];?></textarea>
                 </div>
                 <div class="mb-3">
                     <input placeholder="Website" type="text" value="<?php  echo $data['Website'];?>" class="form-control" name="Website" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                 </div>

                
                 <input type="hidden" value="<?php echo $data['picture'];?>" name="oldImage">

                 <div class="mb-3">
                     <input placeholder="Twitter" type="text" value="<?php  echo $data['Twitter'];?>"  class="form-control" name="Twitter" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3 ">
                     <input placeholder="Linkedin" type="text" value="<?php  echo $data['Linkedin'];?>" class="form-control" name="Linkedin" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                     <input type="file" name='image' class="form-control">
                 </div>
                
                 <img src="uploads/<?php echo $data['picture'];?>" width="40px" class="card-img-top" >
                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>
         </div>
         <div class="col-7">
             <div class="d-flex justify-content-between ">
                 <div class="align-self-center">My courses <span>(8)</span></div>
                 <a href="addCourse.php" class="btn btn-outline-success">Add a New Course</a>
             </div>

             <div class="d-flex flex-wrap justify-content-between">
                 <?php
while ($data_2 = mysqli_fetch_assoc($op_2)) {

    ?>
                 <div class="card  my-2" style="width: 15rem;">
                 <img src="uploads/<?php echo $data_2['cover'];?>"  width="40px" height="250px"  class="card-img-top" >
                     <div class="card-body">
                         <h5 class="card-title"><?php echo $data_2['name']; ?></h5>
                        
                         <a href='editcourse.php?id=<?php echo $data_2['id'];?>' class="btn btn-success">Edit</a>

                         <!-- Button trigger modal -->
                         <button type="button" class=" btn btn-danger" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                             Delete
                         </button>
                     </div>
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     Do you want to delete <?php echo $data_2['name']; ?> course?
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Close</button>
                                     <a href='deletecourse.php?id=<?php echo $data_2['id']; ?>' type="button"
                                         class="btn btn-danger">Delete</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <?php }?>
             </div>
         </div>
     </div>

 </div>
 <div class="container">





     <?php include 'footer.php'?>