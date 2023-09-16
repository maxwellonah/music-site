<?php
session_start();

// Check if the user is not logged in (no active session)
if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page
    header("Location: http://localhost/IT/2/index1.php");
    exit();
}
?>
<div class="container-fluid bg-pri p-0 fixed-top">
    <div class="row">
        <!--brand logo div nav1-->
        <div class="col-md-1 brand d-none d-sm-block" id="nav1logo">
            <a href="index1.php"><img src="images/wave logo.png" alt="logo" style="height: 50px; width: 60px;" class="img-responsive"></a>
        </div>
        <div class="col-md-1 text-start pt-1" id="nav1logo">
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-toggle-on"></i></button>
        </div>
        <div class="col-md-4"></div>
        <!--other top header div or right hand div nav1-->
        <div class="col-md-6 d-flex justify-content-end ">
            <div class="d-flex p-3" role="search">
                <button class="btn btn-outline-light"><?php echo $_SESSION['username'];?></button>
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Logout</button>
            </div>
        </div>
    </div>
</div>



happy birthday sir but i know it tomorrow