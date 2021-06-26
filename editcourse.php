<?php  

  include'db.php';
include'functions.php';
 
$errorMessages  = array();


if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['id'])){ 
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
   
    if(filter_var($id,FILTER_VALIDATE_INT)){
        // CODE 
     
        $sql = "select * from courses where id=".$id;
        $op  = mysqli_query($con,$sql);

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
    }else{
        $data = mysqli_fetch_assoc($op);
    }

}

$sql = "select courses.* where";
$op  = mysqli_query($con,$sql);


 
$message = ""; 
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
  
    $name     = Clean($_POST['name']);
//    $category = Clean($_POST['category']);
//    $target = Clean($_POST['target']);
   $id       = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
$oldImage  = $_POST['oldImage'];
$image     = '';


   if(empty($name)){
       $errorMessages['name'] = "Empty Field";
   }elseif(strlen($name) <= 3){
       $errorMessages['name'] = "Length must be > 3";

   }else{

       $pattern = "/^[a-zA-Z\s*]+$/";

       if(!preg_match($pattern,$name)){
           $errorMessages['name'] = "Invalid Char";

       }

   }

 

//    if(empty($category)){
//        $errors['category'] = "Empty Field";
//    }elseif(strlen($category) <= 3){
//        $errors['category'] = "Length must be > 3";

//    }else{

//        $errors = "/^[a-zA-Z\s*]+$/";

//        if(!preg_match($pattern,$category)){
//            $errors['category'] = "Invalid Char";

//        }

//    }

  

//    if(empty($target)){
//        $errors['target'] = "Empty Field";
//    }elseif(strlen($target) <= 3){
//        $errors['target'] = "Length must be > 3";

//    }else{

//        $pattern = "/^[a-zA-Z\s*]+$/";

//        if(!preg_match($pattern,$target)){
//            $errorMessages['target'] = "Invalid Char";

//        }

//    } 

   if(empty($id))
   {
       $errorMessages['id'] = "Empty Field";
   
   }elseif(!filter_var($id,FILTER_VALIDATE_INT))
   {
       $errorMessages['id'] = "Invalid Id";
   }

   
 
        include'uploadimg.php';
     


    
   
   if(count($errorMessages) == 0){

    $sql_2 = "update courses set name = '$name' , category='$category' , cover='$image' where id=".$id; 

     $op_2 = mysqli_query($con,$sql_2);
    ;
        
     if($op_2){
          $message = "Updated";
          echo $message;
       
     }else{
          $message = "Try Again";
       echo $message;
     }
     $_SESSION["message"] = $message;

     header("Location: editcourse.php?id=".$id);
     echo $message;
    //  header("Location: display.php");
   
    }else{

       $_SESSION["error_message"] = $errorMessages;
        print_r($errorMessages);

    //    header("Location: editcourse.php?id=".$id);
 
    }


  }


   

 






?>
 


<?php include('header.php'); ?>

<?php include('nav.php') ?>

<div class="container">

    <form class=" my-5 p-3 border" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-6">
                <h3>Course Information:</h3>
                <div class="mb-3">
                    <input name="name" value="<?php  echo $data['name'];?>" placeholder="Course Name" type="text" class="form-control" />
                </div>

                <div class="mb-3">
                    <input name="category" value="<?php echo $data['category'];?>"  placeholder="category" class="form-control" />
                </div>
                
                <input type="hidden" value="<?php echo $data['cover'];?>" name="oldImage">

                <div class="mb-3 row">
                <div class="col-3">
                <label class="   align-self-center ">Course Cover</label>
                    <img src="uploads/<?php echo $data['cover'];?>" width="40px" class="card-img-top" >
                </div>


                    <div class="col-9">
                        <input  name="image"  type="file" class="form-control " />
                    </div>
                </div>

                <div class="mb-3">
                    <textarea name="target"   placeholder="ًWhat will students learn in your course?" class="form-control" name=""
                        cols="30" rows="5"> <?php echo $data['target'];?></textarea>
                </div>

                <input  type="hidden" name="id" value="<?php echo $data['id'];?>">

                <div class="mb-3">
                    <input name=" "   placeholder="Price" class="form-control" />
                </div>

                <div class="mb-3">
                    <input name=" "     placeholder="Avaliable Coupon" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <h3>Course Content:</h3>

                    <div class="row">
                        <div class="col-10">
                            <div class="border p-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label">Course Caption:</label>
                                    <div class="p-1">1</div>
                                </div>
                                <input   name=" " type="text" class="form-control mb-3" />
                                <input name=" "  placeholder="" type="file" class="form-control" id="exampleInputPassword1" />
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-outline-primary">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary d-block">Submit</button>
        <!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
    </form>
    
</div>
<?php include'footer.php' ?>