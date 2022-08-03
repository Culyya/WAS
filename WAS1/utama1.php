<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PT Sumitomo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container{max-width: 500px!important;}
    </style>
</head>
<body class='bg-dark text-white'>  
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="mx-auto order-0">
        <img src="gambar/image2.png" alt="gambar/image.png" height="75" width="150">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" >
                    <a class="nav-link" href="utama1.php" style="color: rgb(0, 0, 0);">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: black;">CRUD</a>
                </li>
            </ul>
        </div>
    </nav>
<section style="margin-top: 300px; " >
    <div class="card" style="margin: auto; text-align: center; width: 50%; background-color: bisque;">
        <div class="card-body" style="padding: 50px 60px;">
          <h5 class="card-title" style="color: black; font-weight: bolder">PT Sumitomo</h5>
          <h3 class="card-title" style="color: black; font-weight: bolder">Announcement Systems Web</h3>
          <p class="card-text" style="color: black;">Aplikasi Announcement Systems Web Based yang dapat diakses dari berbagai section
            (departemen) di perusahaan namun hanya dapat diakses oleh pihak-pihak tertentu di masing-
            masing section tersebut. Aplikasi ini juga diharapkan terintegrasi dengan seluruh gedung
            perusahaan (plan 1, plan 2, dan plan 3).</p>
          <a href="utama.php" class="btn btn-primary">Start</a>
        </div>
    </div>
</section>
</body>
</html>
