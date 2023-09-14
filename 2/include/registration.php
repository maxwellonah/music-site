
<!DOCTYPE html>
        <html>
        <head>
            <title>User Registration</title>
        </head>
        <body>
            <section class="text-light mt-5 pt-5">
                <form action="include/register.php" method="post" id="">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Enter Your Email</p>
                            <input name="email" class="form-control me-2" type="email" placeholder="Type Your Email @" aria-label="Email" required>
                        </div>
                        <div class="col-md-6">
                            <p>Create A Username</p>
                            <input name="username" class="form-control me-2" type="text" placeholder="Type Your Username" aria-label="text" required>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="inputPassword6" class="form-label">Create A Password</label>
                            <input name="password" type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock" required>
                        </div>
                        <div class="col-md-6">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input name="confirm_password" type="password" id="confirmPassword" class="form-control" aria-describedby="passwordHelpBlock" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <button name="register" class="btn btn-light mt-3 rounded-pill" style="width: 150px;" type="submit">REGISTER</button>
                        </div>
                    </div>
                </form>
            </section>
        </body>
        </html>

        <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
    Launch static backdrop modal
  </button>