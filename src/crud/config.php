<?php
$conn = mysqli_Connect("db", "root", "root", "belajar-web-db");
if(mysqli_connect_error()){
    mysqli_connect_error();
}