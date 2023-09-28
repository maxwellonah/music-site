<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--jquery-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!--my css link-->
  <link rel="stylesheet" href="css/style.css">

  <!--bootstrap css link
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <script src="https://kit.fontawesome.com/17df12885c.js" crossorigin="anonymous"></script>

  <title>wave site bs</title>
</head>
<?php include 'include/header.php'; ?>

<body>


  <section class="intro mt-5 pt-5 bt-5">
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-6">
          <?php include 'include/slidermain.php'; ?>
          <div class="col-md-6 text-light">
            <h1 class="text-center">WAVE</h1>
            <h1 class="text-center">INVESTORS</h1>
            <p style="font-size: 150%;">Our mission is to unlock the potential of human creativity by giving a million
              creative artist the
              opportunity to live off their art and billions of fans the opportunity to enjoy and be inspired by it</p>
          </div>
        </div>
      </div>
  </section>
  <section class="mt-5 text-light">
    <h2 class="custom-underline px-4">Features</h2>
    <div class="container">
      <div class="row  mt-2">
        <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="images/MIC STUDIO.jpg"
            class="img-fluid" alt="podcast" id="podcast">
          <h2 class="featuretxt" style="padding-left: 100px;">PODCAST</h2>
        </div>
        <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal1"><img src="images/SPEAKER.jpg"
            class="img-fluid" alt="audio">
          <h2 class="featuretxt">AUDIO</h2>
        </div>
        <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="images/headphones.jpg"
            class="img-fluid" alt="artist">
          <h2 class="featuretxt">ARTIST</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 text-light" id="News">
    <h2 class="custom-underline px-4">News</h2>
    <div class="container">
      <div class="row  mt-2">
        <div class="col-md-7 ">
          <div class="d-grid gap-3">
            <button class="btn btn-light" type="button">Wave Updates Coming July 21 2024</button>
            <button class="btn btn-light" type="button">New Signings On September 2023 </button>
            <button class="btn btn-light" type="button" id="btnnews">Video Overlays (Canvas) Available</button>
            <button class="btn btn-light" type="button">Wave Partners With Spotify</button>
          </div>
        </div>
        <div class="col-md-5">
          <?php include 'include/slidersub1.php'; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 text-light" id="Events">
    <h2 class="custom-underline px-4">Events</h2>
    <div class="container">
      <div class="row  mt-2">
        <h4 class="text-center mx-1">CONCERTS</h4>
        <div class="container mx-2">
          <div class="row px-3 mx-3">
            <div class="col-md-6 ">
              <div class="d-flex justify-content-end">
                <div class="eventimg "><img src="images/XXX.png" alt="XXXTentacion"></div>
              </div>
            </div>
            <div class="col-md-6">
              <p class="d-inline-flex gap-1 mb-0 mt-1">Prepare for an unstoppable performance with XXXTentacion tickets.
                Jahseh Dwayne Ricardo Onfroy, who performed under the name XXXTentacion,
                was a Florida-born rapper who put out two hit albums and several hit singles in a violence-ridden career
                that ended when he was shot and killed at the age of 20.
                Prepare for an unstoppable performance with XXXTentacion tickets. Jahseh Dwayne Ricardo Onfroy.
              <div class="collapse" id="collapseExample">
                who performed under the name XXXTentacion, was a Florida-born rapper who put out two hit albums and
                Prepare for an unstoppable performance with XXXTentacion
                tickets. Jahseh Dwayne Ricardo Onfroy, who performed under the name XXXTentacion </div>
              <a class="btn btn-light" id="readmoreButton" data-bs-toggle="collapse" href="#collapseExample"
                role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
              </a>
              </p>
            </div>
          </div>
        </div>

        <div class="container mx-2 mt-1">
          <div class="row px-3 mx-3">
            <div class="col-md-6 text-end">
              <p class="d-inline-flex">Playboi Carti tour 2023: More than 100 artists have been announced to perform at
                the next edition of Rolling Loud California,
                with the bill complete - led by Playboi Carti, Travis Scott and Futuro - announced overnight. Playboi
                Carti will close out the festivities on Friday, March 3,
                with a 35-act bill that also includes Kodak Black, Tyga, Trippie Redd, DaBaby, Saweetie, Fivio Alien and
                Soulja Boy.
              <div class="collapse" id="collapseExample1">
                Then, on Saturday, March 4, Travis Scott arrives for a 41-act bill the size of Lil Baby, Don Toliver, 2
                Chainz,
                Kevin Gates, Lil Yachty, City Girls, Amine and Chief Kee</div>
              <a class="btn btn-light" id="readmoreButton1" data-bs-toggle="collapse" href="#collapseExample1"
                role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
              </a>
              </p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-start">
                <div class="eventimg "><img src="images/travis-scott.png" alt="travis-scott"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mx-2">
          <div class="row px-3 mx-3">
            <div class="col-md-6 ">
              <div class="d-flex justify-content-end">
                <div class="eventimg "><img src="images/chrisbrown.jpg" alt="breazy"></div>
              </div>
            </div>
            <div class="col-md-6">
              <p class="d-inline-flex gap-1 mb-0 mt-1">Chris Brown, a consummate entertainer who has shifted the climate
                of R&B culture since his eponymous 2005 debut,
                has sold in excess of 30 million albums worldwide and surpassed over 10 billion audio streams across
                digital outlets to date.
                Brown has won more than 125 awards including a Grammy Award for his album F.A.M.E.
              <div class="collapse" id="collapseExample2">
                in 2011 and has amassed over 7.5 billion YouTube views - including over 40 music videos that each have
                more than 100 million views earning
                him the title of male artist with the most Vevo certified videos ever and 'Diamond' status from the
                streaming platform. </div>
              <a class="btn btn-light" id="readmoreButton2" data-bs-toggle="collapse" href="#collapseExample2"
                role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
              </a>
              </p>
            </div>
          </div>
        </div>

        <div class="container mx-2 mt-1">
          <div class="row px-3 mx-3">
            <div class="col-md-6 text-end">
              <p class="d-inline-flex">30 million albums worldwide and surpassed over 10 billion audio streams across
                digital outlets to date.
                Brown has won more than 125 awards including a Grammy AwardTravis Scott and Futuro - announced
                overnight. Playboi Carti will close out the festivities on Friday, March 3, with a 35-act bill that also
                includes Kodak Black,
                Tyga, Trippie Redd, DaBaby, Saweetie, Fivio Alien and Soulja Boy.
              <div class="collapse" id="collapseExample3">Saturday, March 4, Travis Scott arrives for a 41-act bill the
                size of Lil Baby, Don Toliver, 2 Chainz, Kevin Gates, Lil Yachty, City Girls, Amine and Chief Keef. 3,
                with a 35-act bill that also includes Kodak Black</div>
              <a class="btn btn-light" id="readmoreButton3" data-bs-toggle="collapse" href="#collapseExample3"
                role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
              </a>
              </p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-start">
                <div class="eventimg "><img src="images/post-malone.JPG" alt="post-malone"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="mt-5 text-light" id="About-Us">
    <h2 class="custom-underline px-4">About-Us</h2>
    <div class="container">
      <div class="row  mt-2">
        <div class="col-md-6"><img src="images/wave logo.png" alt="wave logo"></div>
        <div class="col-md-6">Wave's mission is to unlock the potential of human creativity by giving a million creative
          artists the opportunity to live off their art and billions of fans the opportunity to enjoy and be inspired by
          it. Wave's platform revolutionized music listening forever when we launched in 2008. Our move into podcasting
          brought innovation and a new generation of listeners to the medium, and in 2022 we entered the next audio
          market primed for growth with the addition of audiobooks.
          Today, more listeners than ever can discover, manage and enjoy over 100 million tracks, 5 million podcasts
          titles, and 350,000 audiobooks on Spotify. We are the world’s most popular audio streaming subscription
          service with more than 551 million users, including 220 million subscribers in 184 markets.

          Wave's mission is to unlock the potential of human creativity by giving a million creative artists the
          opportunity to live off their art and billions of fans the opportunity to enjoy and be inspired by it. Wave's
          platform revolutionized music listening forever when we launched in 2008. Our move into podcasting brought
          innovation and a new generation of listeners to the medium, and in 2022 we entered the next audio market
          primed for growth with the addition of audiobooks.
          Today, more listeners than ever can discover, manage and enjoy over 100 million tracks, 5 million podcasts
          titles, and 350,000 audiobooks on Spotify. We are the world’s most popular audio streaming subscription
          service with more than 551 million users, including 220 million subscribers in 184 markets.
        </div>
      </div>
    </div>
  </section>


  <!-- Modal Podcast-->
  <?php include 'include/podcast.php'; ?>

  <!-- Modal Audio-->
  <?php include 'include/audio.php'; ?>

  <!-- Modal Artist-->
  <?php include 'include/artists.php'; ?>

  <!-- Modal signup-->
  <?php include 'include/signup.php'; ?>

  <!-- Modal register-->
  <?php include 'include/registration.php'; ?>

  <!-- Modal login-->
  <?php include 'include/wavelogin.php'; ?>

  <!-- Modal login2-->
  <?php include 'include/wavelogin2.php'; ?>

  <!--error messages-->

  <!--footer-->
  <?php include 'include/footer.php'; ?>


  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!--my js link-->
  <script src="js/java.js"></script>
  <!--bootstrap js link
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>-->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    // Check if the URL parameter 'registrationSuccess' is present
    // If 'registrationSuccess' is '1', display the Bootstrap modal with ID 'exampleModal6'

  </script>




</body>


</html>