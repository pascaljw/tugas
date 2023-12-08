<?php
require_once('../require/database.php');


$query = "SELECT * FROM bukutamu ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/e8b8ffaaa7.js" crossorigin="anonymous"></script>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 0 15px;
            border-collapse: collapse; width: 100%; border: 2px solid white; text-align: center; 
        }

        th {
            
            color: white;
        }

        th,
        td {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }

        h2 {
            /* color: #4287f5; */
        }
    </style>
</head>
<body>
<?php require_once('../layout/barmenu.php')?>
<div id="services">
    <div class="container">
        <h1 class="sub-title"> Buku Tamu </h1>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>
        <div class="services-list">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?= $no; ?></th>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['email']; ?></td>
                                <td><?= $data['pesan']; ?></td>
                                <td>
                                    <a href="../actionbt/delete_buku_tamu.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++; endwhile; ?>
                </tbody>
            </table>
            </div>                  
    </div>
</div>
</body>
</html>