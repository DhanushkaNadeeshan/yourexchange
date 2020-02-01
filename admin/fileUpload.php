<?php
session_start();
include 'config.php';

if (isset($_FILES['fileToUpload'])) {

    $errors = array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $tmp = explode('.', $file_name);
    $file_extension = end($tmp);
    $file_ext = strtolower($file_extension);
    $return = "";

    $new_name = time().'.'.$file_extension;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "../img/" . $new_name);
    }

    print_r(time() );
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $type = $_POST["category"];

    $sql = "INSERT INTO `items`( `title`, `category`, `img`) VALUES ('$title ','$type','$new_name')";

    if (mysqli_query($conn, $sql)) {
        //TODO: change url name if not working
        //http://".$_SERVER['HTTP_HOST']."/{*change this*}/admin/home.php
        header("Location: http://".$_SERVER['HTTP_HOST']."/yourexchange/admin/home.php");
        $return="Succes!!";
    } else {
        $return="Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
$_SESSION["request"] =  $return;