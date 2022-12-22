<?php
    require('create_mahasiswa.php');
    $id = $_GET['id'];
    if(hapus($id) > 0){
        echo '<div class="container mt-5">
        <div class="alert alert-danger" role="alert">Zz
            <h4>Sukses menghapus data!</h4>
        </div>
    </div>';
    header("Location: index.php");
}else{
    echo '<div class="container mt-5">
    <div class="alert alert-danger" role="alert">
    <h4>Gagal menghapus data!</h4>
    </div>
    </div>';
    header("Location: index.php");
}
?>