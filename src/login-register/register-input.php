<?php
include 'koneksi.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$submit = $_POST['submit'];

$hass = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hass')";

if(isset($submit)){
    mysqli_query($conn, $query);
    echo "<h1>Pendaftaran berhasil</h1>";
}
