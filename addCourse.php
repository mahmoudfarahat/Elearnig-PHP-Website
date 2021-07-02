<?php  

  include'db.php';
include'functions.php';


$sql = "select * from courses ";
$op  = mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($op);

  $errors  = array();
  $message = ""; 
  if($_SERVER['REQUEST_METHOD'] == "POST"){
  
   $name = Clean($_POST['name']);
   $price= Clean($_POST['price']);
   $oldImage  = $_POST['oldImage'];
   $image     = '';


   if(empty($name)){
       $errors['name'] = "Empty Field";
   }elseif(strlen($name) <= 3){
       $errors['name'] = "Length must be > 3";

   }else{

       $pattern = "/^[a-zA-Z\s*]+$/";

       if(!preg_match($pattern,$name)){
           $errors['name'] = "Invalid Char";

       }

   }

   $category = Clean($_POST['category']);

   if(empty($category)){
       $errors['category'] = "Empty Field";
   }elseif(strlen($category) <= 3){
       $errors['category'] = "Length must be > 3";

   }else{

       $pattern = "/^[a-zA-Z\s*]+$/";

       if(!preg_match($pattern,$category)){
           $errors['category'] = "Invalid Char";

       }

   }

   $target = Clean($_POST['target']);

   if(empty($target)){
       $errors['target'] = "Empty Field";
   }elseif(strlen($target) <= 3){
       $errors['target'] = "Length must be > 3";

   }else{

       $pattern = "/^[a-zA-Z\s*]+$/";

       if(!preg_match($pattern,$target)){
           $errors['target'] = "Invalid Char";

       }

   } 

   
 


   include'uploadimg.php';
  

print_r($errors);

    $session = $_SESSION['id'];

    if(count($errors) == 0){

     $sql = "insert into courses  (name , category , target , instructor_id  , cover ,price)  values ( '$name', '$category', '$target' , $session , '$image' , $price )" ;

     $op = mysqli_query($con,$sql);
      
     if($op){
        echo $message = "Inserted";
     }else{
      echo  $message = "Try Again";
     }

    }







  }


   








?>



<?php include('header.php'); ?>

<?php require('nav.php') ?>
<div class="container col-6">

    <form class=" my-5 p-3 border" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"
        enctype="multipart/form-data">
        <div class=" ">
            <div class=" ">
                <h3>Course Information:</h3>
                <div class="mb-3">
                    <input name="name" placeholder="Course Name" type="text" class="form-control" />
                </div>

                <div class="mb-3">
                    <input name="category" placeholder="category" class="form-control" />
                </div>
                <div class="mb-3 row">
                    <label class="col-3    align-self-center ">Course Cover</label>
                    <div class="col-9">
                        <input name="image" placeholder="" type="file" class="  form-control " />

                    </div>
                </div>
                <input type="hidden" value="<?php echo $data['cover'];?>" name="oldImage">
               
                <div class="mb-3">
                    <textarea name="target" placeholder="ًWhat will students learn in your course?" class="form-control"
                        name="" cols="30" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <input name="price" placeholder="Price" class="form-control" />
                </div>

                <div class="mb-3">
                    <input name=" " placeholder="Avaliable Coupon" class="form-control" />
                </div>
            </div>


            <div class=" ">
                
            </div>
        </div>

        <button type="submit" class="btn btn-primary d-block">Submit</button>
    </form>

    <form action="addcontent_action.php" class="border"  method="post" enctype="multipart/form-data" >

    <div class="mb-3 mx-3">
                    <h3>Course Content:</h3>

                    <div class="row">
                        <div class="col-10">
                            <div class="border p-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label">Course Caption:</label>
                                    <div class="p-1">1</div>
                                </div>
                                <input name="name" type="text" class="form-control mb-3" />
                                <input name="image" placeholder="" type="file" class="form-control"
                                    id="exampleInputPassword1" />
                            </div>
 
                            <input type="hidden" value="<?php echo $data['id'];?>" name="id">
                            
                        </div>
                        <div class="col-2">
                            <button class="btn btn-outline-primary">+</button>
                        </div>
                    </div>
                </div>
                <?php echo $data['id'];?>

                <button type="submit" class="btn btn-primary d-block mx-3 my-3">Submit</button>

    </form>
</div>
<?php include'footer.php' ?>