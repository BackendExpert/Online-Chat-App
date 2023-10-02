<?php include("../layouts/header.php") ?>

<link rel="stylesheet" href="../../css/style.css">

<div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card login-card">
                <div class="card-header">
                    <i class="fas fa-user-plus"></i>  Login Here
                </div>
                <div class="card-body login-body">
                    <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <p>Username : </p>
                        <input type="text" name="username" id="" class="form-control" placeholder="Username"></p>

                        <p>Email : </p>
                        <input type="email" name="email" id="" class="form-control" placeholder="Email"></p>

                        <p>Password : </p>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password"></p>

                        <p>Confirm Password : </p>
                        <input type="password" name="cpassword" id="" class="form-control" placeholder="Confirm Password"></p>

                        <input type="submit" value="Sign Up" class="btn btn-primary">
                    </form>
                    <br>
                    <p>Don't have an Account ? <a href="../../index.php">Sign In</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
</div>

