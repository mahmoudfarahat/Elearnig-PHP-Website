 
  <?php include('header.php'); ?>

    <?php require('nav.php') ?>
    <div class="container">
      <form class=" my-5 p-3 border">
        <div class="row">
          <div class="col-6">
            <h3>Course Information:</h3>
            <div class="mb-3">
              <input
                placeholder="Course Name"
                type="text"
                class="form-control"
              />
            </div>

            <div class="mb-3">
              <input placeholder="Cateogry" class="form-control" />
            </div>

            <div class="mb-3">
              <textarea placeholder="ًWhat will students learn in your course?" class="form-control" name="" cols="30" rows="5"></textarea>
            </div>
            
            <div class="mb-3">
                <input placeholder="Price" class="form-control" />
            </div>  

            <div class="mb-3">
              <input placeholder="Avaliable Coupon" class="form-control" />
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
                    <input type="text" class="form-control mb-3" />
                    <input
                      placeholder=""
                      type="file"
                      class="form-control"
                      id="exampleInputPassword1"
                    />
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
      </form>
    </div>
    <?php include'footer.php' ?>