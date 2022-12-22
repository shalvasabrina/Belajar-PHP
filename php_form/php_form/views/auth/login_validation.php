<?php
    include '../../koneksi.php';

    $email = $_POST['email'];
    $password = $_POST['password1'];

    //Validation
    $username_error = null;
    $password_error = null;

    if(isset($_POST['submit'])){
        if(empty($email)){
            $username_error = '<div class="alert alert-danger">Email tidak boleh kosong !</div>';
        }else if(empty($password)){
            $password_error = '<div class="alert alert-danger">Password tidak boleh kosong !</div>';
        }else{
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($connection, $sql);
    
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){
                    header("Location: index.php");
                }else{
                    $password_error = '<div class="alert alert-danger">Password Salah !</div>';
                }
            }
        }
    }
?>