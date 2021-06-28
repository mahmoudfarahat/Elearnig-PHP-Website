<?php
include 'db.php'

?>


<?php include 'header.php'?>


<!-- Start nav -->

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a class="navbar-brand mx-2" href="index.php">
            <img src="images/OpenLearning_Logo.png" class="icon" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
            </ul>
            <!-- <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li> -->
            <ul class="navbar-nav">


                <?php

$link = '';
$display_profile_icon = '';

$display_login_up_icon = '';
$display_cart_icon = '';

// href="instructorprofile.php?id=php echo $data['inst_id']; 

if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {

      
    $link = 'instructorprofile.php?id='.$_SESSION['id'];

    $display_login_up_icon = 'd-none';
    $display_cart_icon = 'd-none';

} else if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
    $link = 'studentprofile.php';

    $display_login_up_icon = 'd-none';
    $display_cart_icon = '';
} else {
    $display_profile_icon = 'd-none';
    $display_logout_icon = 'd-none';
    $display_login_up_icon = '';
    $display_cart_icon = 'd-none';
}

?>
                <li class="nav-item mx-2 align-self-center <?php echo $display_cart_icon ?>  ">
                    <a href="cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-cart cart-icon" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                    <!-- <i class="fas fa-shopping-cart"></i> -->
                </li>
                <li class="nav-item <?php echo $display_login_up_icon ?>">
                    <a class="nav-link btn btn-outline-primary login-btn mx-2" href="login.php">Log in</a>
                </li>
                <li class="nav-item mx-2 <?php echo $display_login_up_icon ?>">
                    <a class="nav-link btn btn-primary signup-btn  " href="signup.php">Sign up</a>
                </li>


                <li class="nav-item mx-2 align-self-center <?php echo $display_profile_icon ?> ">



                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </a>

                        <ul class="dropdown-menu drop-style" style="left: -130px;  top: 56px"
                            aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo $link; ?>">My Profile</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                            <li><a class="dropdown-item text-danger" href="logout.php">Log out</a></li>
                        </ul>
                    </div>








        </div>
    </div>
</nav>


<!-- End nav -->