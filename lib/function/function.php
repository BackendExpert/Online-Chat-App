<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function sign_up($username, $email, $pass, $cpass){
        $con = Connection();

        echo $username;


    }

?>