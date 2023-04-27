<?php 
    session_start();
    $src_user = "member01@termmai.com";
    $src_pass = "Mem_123";
    $sru_name = "memberrnajaaaaa";

    $errors = array();
    if (isset($_POST['btnSub'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            if ($username == $src_user && $password == $src_pass) {
                $_SESSION['username'] = $sru_name;
                $_SESSION['Email'] = $src_user;
                $_SESSION['success'] = "Your are now logged in";
                header('location:index.php');
                echo "zjko" ;
            } else if($username != $src_user || $password != $src_pass) {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password try again";
                header('location:signin.php');
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            echo "ไม่รู้";
        }
    }

?>
