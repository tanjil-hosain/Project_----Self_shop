<?php
session_start();
include_once("database.php");

if(isset($_POST['login'])){
    $email_username =mysqli_real_escape_string ($db_connection , $_POST['email_user']);

    $password = $_POST['password'];
     $sql = "select * from users where email = '$email_username' or user_name ='$email_username'";
     $result = mysqli_query($db_connection, $sql);
     if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Password verify kora
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            
            header("Location: main.php");
        } else {
            echo "<script>alert('Password match kore nai!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('User paoa jay nai!'); window.location='login.php';</script>";
    }

}
?>