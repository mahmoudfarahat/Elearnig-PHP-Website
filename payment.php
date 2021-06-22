 
  <?php include'header.php' ?>
    <?php require('nav.php')  ?>
    <div class="container my-3">
      <div class="row payment-design">
        <div class="col-7">
          <h4>Check out</h4>
          <h5 class="my-3">Billing Address</h5>
          <div class="dropdown">
            <button
              class="btn btn-secondary dropdown-toggle"
              type="button"
              id="dropdownMenuButton1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Country
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

          <div class="form-check my-3">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">
              New Payment Card
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="flexRadioDefault2"
              checked
            />
            <label class="form-check-label" for="flexRadioDefault2">
              Pay pal
            </label>
          </div>

          <form class="p-3 mt-3 border">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Name on Card"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Card Number"
              />
            </div>

            <div class="row d-flex justify-content-between">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="MM / YY" />
                <input
                  type="text"
                  class="form-control my-3"
                  placeholder="Zip/postal Code"
                />
              </div>
              <div class="mb-3 col-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Security Code"
                />
              </div>
            </div>

            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
              </label>
            </div>
          </form>
          <h3 class="mt-3">Order Details</h3>
        </div>
        <div class="col-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Summary</h5>
              <h6>Original price <span>$94</span></h6>
              <h6>Coupon discounts <span>-$81</span></h6>
              <hr />
              <h6>Total: <span>$13.99</span></h6>
              <p></p>

              <p class="card-text">
                By completing your purchase you agree to these
                <a href="">Terms of Service</a>.
              </p>
              <a href="#" class="btn btn-lg btn-danger d-block"
                >Complete Payment</a
              >
            </div>
          </div>
          <div class="card my-3">
            <div class="card-body">
              <h5 class="card-title">Do you have a Coupon?</h5>
               
              <input type="text" placeholder="Coupon" class="form-control my-3">

              
              <a href="#" class="btn btn-lg btn-success d-block"
                >Complete Process</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include'footer.php' ?>