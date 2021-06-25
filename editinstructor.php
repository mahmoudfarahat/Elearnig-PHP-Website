 <?php include 'header.php';
require 'nav.php';

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

// echo $_SESSION['message']

?>

 <div class="container">
     <div class="row profile ">
         <div class="col-5">
             <h2>Edit Profile</h2>
             <form class=" p-2 border    ">
                 <div class="mb-3">
                     <input placeholder="Name" name="name" class="form-control">
                 </div>
                 <div class="mb-3 ">
                     <input placeholder="Profession" type="text" class="form-control" name="email"
                         id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                     <textarea placeholder="About me" name="" id="" cols="30" class="form-control" rows="5"></textarea>

                 </div>
                 <div class="mb-3">
                     <input placeholder="Website" type="text" class="form-control" name="email" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                     <input placeholder="Twitter" type="text" class="form-control" name="email" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3 ">
                     <input placeholder="Linkedin" type="text" class="form-control" name="email" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                     <input type="file" class="form-control">
                 </div>
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
while ($data = mysqli_fetch_assoc($op_2)) {

    ?>
                 <div class="card  my-2" style="width: 15rem;">
                     <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title"><?php echo $data['name']; ?></h5>
                         <a href="">By
                             <?PHP echo $_SESSION['Name'] ?>
                         </a>
                         <a href="" class="btn btn-success">Edit</a>
                     
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
                                     Do you want to delete <?php echo $data['name']; ?> course?
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Close</button>
                                     <a href='deletecourse.php?id=<?php echo $data['id']; ?>' type="button" class="btn btn-danger">Delete</a>
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