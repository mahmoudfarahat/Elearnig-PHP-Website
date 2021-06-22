 
<?php include'header.php' ?>
  <?php  require('nav.php') ?>

<div class="container">
    <div class="row profile " >
        <div class="col-5">
            <h2>Edit Profile</h2>
            <form class=" p-2 border    ">
                <div class="mb-3">
                    <input placeholder="Name" name="name"  class="form-control"  >
                  </div>
                  <div class="mb-3 ">
                    <input placeholder="Profession" type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                    <textarea placeholder="About me" name="" id="" cols="30" class="form-control" rows="5"></textarea>

                </div>
                <div class="mb-3">
                    <input placeholder="Website" type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <input placeholder="Twitter" type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3 ">
                    <input placeholder="Linkedin" type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                  <input type="file" class="form-control"  >
                </div>
                <button type="submit"  class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="col-7">
          <div class="d-flex justify-content-between ">
            <div class="align-self-center">My courses <span>(8)</span></div>
            <a href="addCourse.php" class="btn btn-outline-success">Add a New Course</a>
          </div>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="card  my-2" style="width: 15rem;">
                    <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      
                      <a href="#" class="btn btn-danger">Delete</a>
                      <a href="#" class="btn btn-success">Edit</a>
                    </div>
                  </div>
                  <div class="card  my-2" style="width: 15rem;">
                    <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-danger">Delete</a>
                      <a href="#" class="btn btn-success">Edit</a>
                    </div>
                  </div>
                  <div class="card  my-2" style="width: 15rem;">
                    <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-danger">Delete</a>
                      <a href="#" class="btn btn-success">Edit</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
</div>
    <div class="container">
    
    </div>

    
    <?php include'footer.php' ?>