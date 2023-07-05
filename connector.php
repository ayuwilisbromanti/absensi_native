<?php
$connect = mysqli_connect('localhost','root','','absensi');

if(mysqli_connect_error()){
    printf("Connection failed: %s\n", mysqli_connect_error);
    exit();
}
?>