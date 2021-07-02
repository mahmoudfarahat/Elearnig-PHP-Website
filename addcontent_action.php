<?php   
include'db.php';

include'functions.php';

 

  $errorMessages  = array();
   $message = ""; 
   if($_SERVER['REQUEST_METHOD'] == "POST"){
 


    $name     = Clean($_POST['name']);
    $id       = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
   
    $image     = '';


    // if(empty($name)){
   
    //   $errorMessages['name'] = "Name Field Required";
         
    //   }else{
    //         if(strlen($name) < 3){
    //           $errorMessages['name']  = "Name must be >= 3";
    //         }elseif (!preg_match("/^[a-zA-Z\s*']+$/",$name)) { 
             
    //             $errorMessages['name']  = "Only chars allowed";
   
    //         }    
    //   }
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
    
         $allowedExtensions = array('mp4','MP4');
    
         if(in_array($fileExtension[1],$allowedExtensions)){
    
          // code ....
          
          $uploaded_folder = "./uploads/";
    
          $desPath = $uploaded_folder.$newName;
    
         if(!move_uploaded_file($fileTempPath,$desPath)){
            $errorMessages['image'] = "Error in Uplading file";  
         }else{
             $image =  $newName;
             
                         // delete old image .... 
                        //  if(file_exists('./uploads/'.$oldImage)){
                        //     unlink('./uploads/'.$oldImage);
                        // }
         }
    
    
         }else{
    
            $errorMessages['image'] =  'Not Allowed Extension';
         }
        }else{
    
            $errorMessages['image'] =  'please upload File';
    
        }

print_r($errorMessages);
      if(count($errorMessages) == 0){

          
       
          $sql_3 = "insert into course_content  ( video_topic , video_file,  course_id )  values ( '$name' , '$image' , '$id'  )" ;
  
        $op_3  = mysqli_query($con,$sql_3);
  
        if($op_3){
             echo $message = "inserted";
         
            
        }else{
            echo $message = "Try Again";
        }
   
          $_SESSION['message'] = $message;
          echo    $_SESSION['message'];
        //   header("Location: addCourse.php");
        //   $_SESSION['Name'] =  $data['Name'] ;
       }else{
          $_SESSION['error_messsage'] = $errorMessages;
          // header("Location: add.php");
        //   header("Location: login.php");
  
  
       }
      }
?>


























 



