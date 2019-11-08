<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="css/uikit.min.css">
    <title>Tambah Agenda</title>
    <style>
        .uk-input {
            border-radius: 20px;

        }
    </style>
</head>

<body class="uk-animation-fade">
    <form method="post" action="prosesagenda.php">
        <div class="uk-position-center">
            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                <h3 class="uk-text-center">Tambah Agenda</h3>
                <input class="uk-input uk-form-width-large" name="tanggal" type="date" placeholder="Tanggal">
                <br><br>
                <input class="uk-input uk-form-width-large" name="pekerjaan" type="text" placeholder="Bentuk Pekerjaan">
                <br><br>
                <input class="uk-input uk-form-width-large" name="waktu1" type="time" placeholder="Waktu Mulai">
                <br><br>
                <input class="uk-input uk-form-width-large" name="waktu2" type="time" placeholder="Waktu Selesai">
                <br><br>
                <button type="submit" name="submit" class="uk-button uk-button-primary uk-align-center uk-input"
                    style="border-radius:20px;">Tambah Agenda</button>
            </div>
        </div>
    </form>
</body>

</html>