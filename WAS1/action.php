<?php

include("config.php");
if(isset($_POST['panggilan'])){

    $input = $_POST['panggilan'];

    $query = "SELECT * FROM kontak WHERE nama LIKE '{$input}%' LIMIT 2";

    $result = mysqli_query($conn,$query);

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1 panggilan">' . $row['nama'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }


}
?>

<?php

include("config.php");
if(isset($_POST['section'])){

    $input = $_POST['section'];

    $query = "SELECT * FROM section WHERE jurusan LIKE '{$input}%' LIMIT 2";

    $result = mysqli_query($conn,$query);

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1 jurusan">' . $row['jurusan'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }


}
?>

<?php

include("config.php");
if(isset($_POST['tempatpertemuan'])){

    $input = $_POST['tempatpertemuan'];

    $query = "SELECT * FROM tempat WHERE tikum LIKE '{$input}%' LIMIT 2";

    $result = mysqli_query($conn,$query);

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1 tikum">' . $row['tikum'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }


}
?>





