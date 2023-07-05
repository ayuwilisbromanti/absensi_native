<?php

    include "connector.php";

    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)){
            echo "<script>alert('Gagal login. Cek kelengkapan data anda.'); location.href='index.php';</script>";
        }else{
            $qry_login = mysqli_query($connect, "SELECT * FROM user WHERE email='".$email."' AND password = '".$password."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login = mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id'] = $dt_login['id'];
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['nama'] = $dt_login['nama'];
                $_SESSION['status_login']=true;
                header("location: dashboard.php");
            }else{
                echo "<script>alert('Gagal login.'); location.href='index.php';</script>";
            }
        }
    }
?>