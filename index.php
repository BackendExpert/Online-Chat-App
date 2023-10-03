<?php include("lib/layouts/header.php") ?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    
<div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card login-card">
                <div class="card-header">
                    <h4><i class="fas fa-user-lock"></i>  Sign In Here</h4>
                </div>
                <div class="card-body login-body">
                    <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <p>Username : </p>
                        <input type="text" name="username" id="" class="form-control" placeholder="Username" required></p>

                        <p>Password : </p>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password" required></p>

                        <input type="submit" value="Sign In" class="btn btn-primary">
                    </form>
                    <br>
                    <p>Don't have an Account ? <a href="lib/views/reg.php">Sign Up</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>


</div>