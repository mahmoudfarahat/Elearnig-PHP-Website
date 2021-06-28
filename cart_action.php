<?php
include 'db.php';
include'functions.php';

$errorMessages  = array();
   $message = "";  

if(isset($_SESSION['id']) &&  $_SESSION['role'] == 2 ){
  
}else {
    # code...

    header("location:login.php");
}
 
   if($_SERVER['REQUEST_METHOD'] == "POST"){

    // $review     = Clean($_POST['review']);  
    $id       = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);

    //   echo  $_SESSION['id'].'_'; 
    //   echo $id;
  
    // if(empty($review)){
   
    //   $errorMessages['review'] = "review Field Required";
         
    //   }else{
    //         if(strlen($review) < 3){
    //           $errorMessages['review']  = "review must be >= 3";
    //         }elseif (!preg_match("/^[a-zA-Z\s*']+$/",$review)) { 
    //             $errorMessages['review']  = "Only chars allowed";
    //         }    
    //   }
   
   
    //   if(count($errorMessages) == 0){

        $student_id = $_SESSION['id'];
        
    //     $course_id = $data['id'];



 
          $sql = "insert into cart_relation ( `student_id`, `course_id`) values ( $student_id ,$id)";
        
  
        $op= mysqli_query($con,$sql);
        
     
        if($op){
             echo $message = "Inserted";
            
        }else{
          echo  $message = "Try Again";
         
        }
   
        //   $_SESSION['message'] = $message;
        header("Location: cart.php");
         
  
         }else{
        //    $_SESSION['error_messsage'] = $errorMessages;

           header("Location: showcourse.php?id=.$id");
          
            
      // 
       }
     
    
   

























?>