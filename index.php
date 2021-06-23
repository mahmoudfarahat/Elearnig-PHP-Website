<?php include'header.php' ?>
<?php require('nav.php') ;

  include('db.php');
  
echo $_SESSION['role'];
?>
    <div class="container my-5 ">
      <div class="row ">
        <div class="d-flex my-3 justify-content-between col-3">
          <button type="button" class="btn btn-outline-primary btn-lg">Filter</button>
          <div class="dropdown ">
            <button class="btn btn btn-outline-primary dropdown-toggle btn-lg" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             Most Popular
            </button>
            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item disabled" href="#">Sort</a></li>
              <li><a class="dropdown-item" href="#">Most Popular</a></li>
              <li><a class="dropdown-item" href="#">Highest Rated</a></li>
              <li><a class="dropdown-item" href="#">Newest</a></li>
            </ul>
          </div>
        </div>
        <div class=" d-flex my-3    d-flex align-items-center  flex-row-reverse    col-6">
       1,109 results 
             
        </div>
      </div>
     
  
        <div class="row">
            <div class="col-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Ratings
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Default radio
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Default checked radio
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Video Duration
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                              Checked checkbox
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Price  
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-9">
<!-- Start Courses Cards -->
 <div class="d-flex flex-wrap ">
  <a href="showcourse.php" class="">
    <div class="card mx-2" style="width: 15rem;">
      <img src="images/course-logo-1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       
      </div>
    </div>
  </a>
  
  <a href="">
    <div class="card mx-2" style="width: 15rem;">
      <img src="images/course-logo-1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
      </div>
    </div>
  </a>
      
  <a href="">
    <div class="card mx-2" style="width: 15rem;">
      <img src="images/course-logo-1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </a>
  

  
  



 </div>

    
    
   
      
    

            </div>
        </div>    
<!-- End Courses Cards -->

<!-- start Pagination -->
<div class="container d-flex justify-content-center my-5">
  <nav aria-label="..." >
    <ul class="pagination" >
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>

<!-- End Pagination -->

    </div>




    <?php include'footer.php' ?>