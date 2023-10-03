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
        else{
            $select_user = "SELECT * FROM user_tbl WHERE username = '$username' || email = '$email";
            $select_user_result = mysqli_query($con, $select_user);
            $select_user_nor = mysqli_num_rows($select_user_result);

            if($select_user_nor < 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>SignUp Error!</strong> User Already Exists...!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            }
            else{
                $insert_user = "INSERT INTO user_tbl(username,email,pass,is_active,join_at)VALUES('$username','$email','$pass',1,NOW())";
                $insert_user_result = mysqli_query($con, $insert_user);                
            }
            
        }

    }

?>