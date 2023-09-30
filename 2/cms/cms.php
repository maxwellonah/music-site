<!DOCTYPE html>
<html lang="en">
<?php
session_start();

// Check if the user is not logged in (no active session)
if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page
    header("Location: http://localhost/IT/2/index1.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!--my css link-->
    <link rel="stylesheet" href="../css/style.css">
    <!--bootstrap css link
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/17df12885c.js" crossorigin="anonymous"></script>
    <title>wave site cms</title>
</head>

<body>

    <?php include '../include/header2.php'; ?>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-pri">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <?php include('../include/logout.php'); ?>
                </div>
            </div>
        </div>
    </div>




    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <div class="col">
            <div class="card bg-pri2">
                <div class="container">
                    <section class="text-light mt-0 pt-2">
                        <form action="cmsprocess.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <h3 class="text-light m-0 p-0">New Song Form</h3>
                                <div class="col-md-6">
                                    <label for="coverart">Cover Art</label>
                                    <input type="file" name="coverart" id="coverart" class="form-control me-2"
                                        accept="image/*" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="artist">Artist</label>
                                    <input name="artist" class="form-control me-2" type="text"
                                        placeholder="Enter Artist Name" required>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <label for="song">Song</label>
                                    <input name="song" class="form-control me-2" type="text"
                                        placeholder="Enter Song Title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="audio">Audio</label>
                                    <input name="audio" id="audio" class="form-control me-2" type="file"
                                        accept="audio/*" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 text-center">
                                    <button name="submit" class="btn btn-light mt-3 rounded-pill" style="width: 150px;"
                                        type="submit">Upload</button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Include jQuery -->
    <script src="../https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--my js link-->
    <script src="../js/java.js"></script>
    <!--bootstrap js link
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>-->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
        // Check if the URL parameter 'registrationSuccess' is present
        // If 'registrationSuccess' is '1', display the Bootstrap modal with ID 'exampleModal6'
    </script>
</body>

</html>