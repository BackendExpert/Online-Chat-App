<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function sign_up($username, $email, $pass, $cpass){
        $con = Connection();

        if($pass != $cpass){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Password Error!</strong> Password and Confirm Password not Match...!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }

    }

?>