<?php
include "../../koneksi.php";
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$asal_universitas = $_POST['asal_universitas'];
$domisili = $_POST['domisili'];


$form_success = null;
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO mahasiswa (nama, email, asal_universitas, domisili) VALUES ('$nama', '$email', '$asal_universitas', '$domisili')";
    if ($connection->query($sql) === TRUE) {
        $form_success = '<div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4>Sukses menambah data!</h4>
        </div>
    </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
} else {
    $form_error =  '<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        <h4>Sukses menambah data!</h4>
    </div>
</div>';
}

//Hapus
function hapus($id){
    global $connection;
    $sql = mysqli_query($connection, "DELETE FROM mahasiswa WHERE id=$id");

    return mysqli_affected_rows($connection);
}

