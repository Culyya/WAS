<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'was';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>$title</title>
		<link href="css/style2.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			.container{max-width: 500px!important;}
		</style>
	</head>
	<body>
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
					<a class="nav-link" href="read.php" style="color: black;">CRUD</a>
				</li>
				<li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
                </li>
			</ul>
		</div>
	</nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}




?>