<?php
include '../../koneksi.php';

session_start();
$nama = $_POST['name'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$role_id = 2;
$password_hash = password_hash($password1, PASSWORD_DEFAULT);

//Validation
$username_error = null;
$email_error = null;
$password1_error = null;
$password2_error = null;
$passwordfull_error = null;
$agreement_error = null;

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO users (nama, email, password, role_id) VALUES ('$nama', '$email', '$password_hash', '$role_id')";

    require_once('register_validation.php');
    if(empty($nama)){
        $username_error = '<div class="alert alert-danger">Nama tidak boleh kosong !</div>';
    }else if(empty($email)){
        $email_error = '<div class="alert alert-danger">Email tidak boleh kosong !</div>';
    }else if(empty($password1)){
        $password1_error = '<div class="alert alert-danger">Password tidak boleh kosong !</div>';
    }else if(empty($password2)){
        $password2_error = '<div class="alert alert-danger">Silakan ketik ulang password !</div>';
    }else if($password1 != $password2){
        $passwordfull_error = '<div class="alert alert-danger">Password tidak sama !</div>';
    }else if(empty($_POST['agree'])){
        $agreement_error = '<div class="alert alert-danger">Checklist terms and agreements! !</div>';
    }else if(!empty($_POST['agree'])){
        if($connection->query($sql) === TRUE) {
            echo "Data berhasil disimpan!";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}else {
    echo "Data gagal disimpan";
}