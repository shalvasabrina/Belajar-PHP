<?php require('create_mahasiswa.php') ?>s
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4836cc861a.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php echo $form_success ?>
    <div class="container mt-5">
        <form method="post"></form>
            <div class="mb-3">
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" name="nama">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="asal_universitas" placeholder="Asal Universitas" name="asal_universitas">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="domisili" placeholder="Domisili" name="domisili">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <div class="container mt-3">
        <table class="table table-dark table-stripped">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Asal Universitas</th>
                <th>Domisili</th>
                <th>
                    Action
                </th>
            </tr> 
            <?php
            include "../../koneksi.php";
            $result = $connection->query("SELECT * FROM mahasiswa");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['asal_universitas'] . "</td>";
                    echo "<td>" . $row['domisili'] . "</td>";
                    ?>
                    <td>
                        <a href="" class="btn btn-success btn-md">
                        <span>Update</span>
                        </a>
                        <a href="hapus_mahasiswa.php?id= <?= $row['id']; ?>" class="link-danger">
                            <span><b>Delete</b></span>
                        </a>
                    </td>
                    <?php
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>