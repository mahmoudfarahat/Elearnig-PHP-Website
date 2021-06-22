 
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
                  <input placeholder="email" type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            
              
              <div class="mb-3">
                <input type="file" class="form-control"  >
              </div>
              <button type="submit"  class="btn btn-primary">Submit</button>
            </form>
      </div>
  
  </div>
  
</div>
 

  
  <?php include'footer.php' ?>
</body>
  </html>