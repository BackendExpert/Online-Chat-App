<?php include("lib/layouts/header.php") ?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card login-card">
                <div class="card-header">
                    <i class="fas fa-user-lock"></i>  Login Here
                </div>
                <div class="card-body login-body">
                    <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <p>Username : </p>
                        <input type="text" name="username" id="" class="form-control" placeholder="Username"></p>

                        <p>Password : </p>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password"></p>

                        <input type="submit" value="Sign In" class="btn btn-primary">
                    </form>
                    <br>
                    <p>Don't have an Account ? <a href="lib/views/reg.php">Sign Up</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
</div>

