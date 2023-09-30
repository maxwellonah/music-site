<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--my css link-->
  <link rel="stylesheet" href="css/style.css">
  <!--bootstrap css-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/17df12885c.js" crossorigin="anonymous"></script>
  <title>index2</title>
</head>

<body>
  <?php include 'include/header2.php'; ?>
  <?php include 'include/sidebar.php'; ?>

  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-pri">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <?php include 'include/logout.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5 mx-5 text-light px-5">
    <h2>WELCOME BACK</h2>
  </div>
  <div class="container text-end ">
    <div class="btn btn-light btn-rounded-pill p-1" data-bs-toggle="modal" data-bs-target="#exampleModal11">
      <h5 class="p-0 m-0">MORE</h5>
    </div>
  </div>
  <?php include 'include/audio1.php' ?>
  <section>
    <div class="row mt-5 text-light mx-5 px-3">
      <h3>FOR YOU</h3>
    </div>
    <div class="container px-5">
      <div class="row">
        <h5 class="custom-underline text-light text-end px-5 mx-5 bx-5">SHOW ALL</h5>
      </div>
      <?php include_once 'include/foryou.php' ?>
    </div>
  </section>

  <div class="px-5 mt-5">

  </div>
  <!--modal for more songs                                       -->
  <?php include 'include/audio1a.php' ?>
<?php include 'include/music-player.php'; ?>
  
  <?php include 'include/footer.php'; ?>

  <!--my js link-->
  <script src="js/java.js"></script>
  <!--bootstrap js link
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>-->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--for the music player-->
  
</body>

</html>