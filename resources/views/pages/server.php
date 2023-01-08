<?php
session_start();
echo "sakums";
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// Savienot ar DB
$conn = mysqli_connect('localhost', 'root', '', 'kval_darbs');
//Parbaudīt savienojumu
if (!$conn) {
    die("Nav savienojuma: " . mysqli_connect_error());
  }
if (isset($_POST['login_admin'])) {
    $vards = mysqli_real_escape_string($db, $_POST['vards']);
    $uzvards = mysqli_real_escape_string($db, $_POST['uzvards']);
    $parole = mysqli_real_escape_string($db, $_POST['parole']);
  // form validācija: pārliecinās, ka form pareizi aizpildīts
    if (empty($vards)) {
        array_push($errors, "Jaaizpilda visi lauki.");
    }
    if (empty($uzvards)) {
        array_push($errors, "Jaaizpilda visi lauki.");
    }
    if (empty($parole)) {
        array_push($errors, "Jaaizpilda visi lauki.");
    }
  //ja nav error, tad salīdzina form datus ar DB
    if (count($errors) == 0) {
        $parole = md5($parole);
        $query = "SELECT * FROM admin WHERE vards='$vards' AND uzvards='$uzvards' AND parole='$parole'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['vards'] = $vards;
          header('location: index.blade.php');
        }else {
            array_push($errors, "Nepareizi ievadīti dati");
        }
    }
  }
?>