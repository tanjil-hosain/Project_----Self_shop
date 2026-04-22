<?php
include_once("database.php");
?>
<?php
if(isset($_POST['register'])){
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $hash_password = password_hash($password , PASSWORD_DEFAULT);
    $sql = "insert into users (full_name,user_name, email, phone, password, address ) values ('$full_name', ' $username', '$email','$phone', '$password', '$address')";
    if (mysqli_query($db_connection, $sql)) {
        echo "<script>alert('Registration Successful!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db_connection);
    }
}
?>