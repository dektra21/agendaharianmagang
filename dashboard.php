<?php
session_start();
include_once("koneksi.php");

$query = "SELECT * FROM agenda_harian";

$hasil = mysqli_query($conn, $query);

$result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.min.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>Agenda Harian</title>
    <style>
        .uk-h1{
            font-family: 'Poppins', sans-serif;
        }
        .uk-button-muted{
            float: right;
        }
    </style>

</head>


<body class="uk-animation-fade">
<h1 class="uk-h1 uk-text-center">Agenda Harian <?= $name;?></h1>
<button class="uk-button uk-button-muted uk-margin" onclick="window.location.href='logout.php'">LOG OUT</button>
    <br>
    <br>
    <button class="uk-button uk-button-primary uk-width-1-3 uk-margin-small-bottom" style="color:white; float:left;"
        onclick="window.location.href='tambahagenda.php'">Tambah Agenda</button>
        

    <table class="uk-table uk-table-hover uk-table-divider uk-text-center">
        <thead>
            <tr class="uk-text-center">
                <th class="uk-text-center">No</th>
                <th class="uk-text-center">Tanggal</th>
                <th class="uk-text-center">Bentuk Pekerjaan</th>
                <th class="uk-text-center">Waktu Mulai</th>
                <th class="uk-text-center">Waktu Selesai</th>
                <th class="uk-text-center"></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php while($data = mysqli_fetch_array($hasil)) : ?>

            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td><?php echo $data['waktu1']; ?></td>
                <td><?php echo $data['waktu2']; ?></td>
                <td> <button class="uk-button uk-button-text" onclick="window.location.href='hapus.php?id=<?= $data['id']?>'">Hapus</button></td>
            </tr>

            <?php endwhile;  ?>
            </tr>
        </tbody>
    </table>
</body>

</html>