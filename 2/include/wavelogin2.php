<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <section class="text-light mt-5 pt-5">
        <form action="include/login.php" method="post">
            <div class="row">
                <div class="col-md-6 pt-2">
                    <p>Enter Your Username</p>
                    <input name="username" class="form-control me-2" type="text" placeholder="Type Your username" aria-label="username" required>
                </div>
                <div class="col-md-6 pt-2">
                    <p>Enter Your Password</p>
                    <input name="password" type="password" class="form-control" aria-describedby="passwordHelpBlock" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <button name="login" class="btn btn-light mt-3 rounded-pill" style="width: 150px;" type="submit">LOGIN</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>