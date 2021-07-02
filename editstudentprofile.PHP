<?php   
include'db.php';

include'functions.php';

$sql = 'SELECT * FROM `students` WHERE id= ' . $_SESSION['id'];

$op = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($op);

  $errorMessages  = array();
   $message = ""; 
   if($_SERVER['REQUEST_METHOD'] == "POST"){
 


    $name     = Clean($_POST['name']);
    $email    = Clean($_POST['email']);
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

          
          $sql_4= "update students set name = '$name' ,   email='$email' , picture='$image' where id=".$_SESSION['id']; 
  
        $op_4 = mysqli_query($con,$sql_4);
  
        if($op_4){
             echo $message = "Updated";
         
            
        }else{
            $message = "Try Again";
        }
   
          $_SESSION['message'] = $message;
          header("Location: editstudentprofile.php");
        //   $_SESSION['Name'] =  $data['Name'] ;
       }else{
          $_SESSION['error_messsage'] = $errorMessages;
          // header("Location: add.php");
  
  
       }
      }
?>

























 




























 <?php include'header.php' ?>
<?php  require('nav.php') ?>  

<div class="container">
  <div class="row profile " >
      <div class="col-5">
          <h2>Edit Profile</h2>
          <form class=" p-2 border        "  action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"    enctype="multipart/form-data"  >
              <div class="mb-3">
                  <input placeholder="Name"  name="name"  value="<?php echo $data['name'];?>" class="form-control"  >
                </div>
                <div class="mb-3 ">
                  <input placeholder="email" type="text"  value="<?php echo $data['email'];?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            
              
              <div class="mb-3">
                <input type="file" name="image" class="form-control"  >
              </div>
              <img src="uploads/<?php echo $data['picture'];?>"  width="40px"     class="card-img-top" >
              <button type="submit"  class="btn btn-primary">Submit</button>
            </form>
      </div>
  
  </div>
  
</div>
 

  
  <?php include'footer.php' ?>
 