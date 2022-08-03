<!DOCTYPE html>
<html lang="en">
<head>
<title>PT Sumitomo</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
.container{
    max-width: 500px!important;
}

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
                    <a class="nav-link" href="utama.php" style="color: black;">Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: black;">CRUD</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=" pt-5 text-center">
        <div class="card text-center mb-3" style="margin: auto; width: 15%; padding: 10px;">
            <h5 class="card-text mx-auto order-0" style="color: black; font-weight: bolder;">DESKRIPSI PEMANGGILAN</h5>
        </div>

        <div class="container form-group">
            <label for="">Panggilan Kepada </label>
                <input type="text" name="search" id="panggilan"  class="form-control" placeholder="nama ..." autocomplete="off"  style="height:65px;" required >
                <div class="list-group" id="show-panggilan">
                    <!-- Here autocomplete list will be display -->
                </div>
        </div>
        <div class="container form-group">
            <label for="">section</label>
            <input type="text" name="search" id="section"  class="form-control" placeholder="nama ..." autocomplete="off"  style="height:65px;" required >
                <div class="list-group" id="show-section">
                    <!-- Here autocomplete list will be display -->
                </div>
        </div>

        <table style="margin-left:auto;margin-right:auto"  borde="">
            <tr>
            <th>Line</th>
            <th>Lot</th>
            <th>Lantai</th>
        </tr>
            <tr>
            <td>
            <input type="number" class='form-control' style="width:150px; height:30px; margin: auto;" id="line" value="1"><br/>
            </td>
            <td>
                <input type="number"class='form-control' style="width:150px; height:30px; margin: auto;" id="lot" value="1"><br/>
            </td>
            <td>
            <input type="number"class='form-control' style="width:150px; height:30px; margin: auto;"id="lantai" value="1"><br/>
            </td>
            </tr>
        </table>

        <div class="container form-group">
            <label for="" >Fast</label>
            <div id="rateIndicator" class="badge badge-primary float-right">1</div>
            <input type="range"  id="rateInput" class='form-control' min='0.5' max="2" step='0.1' value='1'>
        </div>

        <div class="container form-group">
            <label for="">Pitch</label>
            <div id="pitchIndicator" class="badge badge-primary float-right">1</div>
            <input type="range"  id="pitchInput" class='form-control' min='0' max="2" step='0.1' value='1'>
        </div>

        <div class="container form-group">
            <label for="">Accent</label>
            <select    class='form-control' id="voiceList" ></select>
        </div>

        <div class="container form-group">
            <button id="btnspeak" class="btn btn-primary btn-block btn-lg" onclick="speak()" >Memulai Pemanggilan</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="search.js"></script>
    <script src='scriptline.js'></script>
</body>
</html>
