<?php
session_start();
require('config/koneksi.php');
$cek = new Koneksi;
class Auth
{
    public function register($data)
    {
        $cek = new Koneksi;
        $Username = $data['Username'];
        $Password = password_hash($data['Password'], PASSWORD_BCRYPT);
        $Email = $data['Email'];
        $NamaLengkap = $data['NamaLengkap'];
        $Alamat = $data['Alamat'];
        $sql = "INSERT INTO user VALUES (NULL, '$Username','$Password','$Email','$NamaLengkap','$Alamat','user')";
        $query = mysqli_query($cek->koneksi(), $sql);
        if ($query) {
            echo "<script>";
            echo 'alert("Berhasil Daftar Akun ");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        } else {
            echo "<script>";
            echo 'alert("Pendaftaran Gagal.");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        }
    }
    public function login($email, $password)
    {
        $cek = new Koneksi;
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $query = mysqli_query($cek->koneksi(), $sql);
        $data = mysqli_fetch_assoc($query);

        $datapassword = isset($data['Password']) ? $data['Password'] : "";
        if (password_verify($password, $datapassword)) {

            if ($data['Role'] == 'admin') {
                $_SESSION['data'] = $data;
                echo "<script>";
                echo 'alert("Login berhasil."); ';
                echo 'window.location.href = "dashboard.php?page=admin";';
                echo '</script>';
            } elseif ($data['Role'] == 'petugas') {
                $_SESSION['data'] = $data;
                echo "<script>";
                echo 'alert("Login berhasil."); ';
                echo 'window.location.href = "dashboard.php?page=petugas";';
                echo '</script>';
            } else {
                $_SESSION['data'] = $data;
                echo "<script>";
                echo 'alert("Login berhasil."); ';
                echo 'window.location.href = "dashboard.php?page=user";';
                echo '</script>';
            }
        } else {
            echo "<script>";
            echo 'alert("Login Gagal."); ';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        }
    }
    public function logout()
    {
        session_destroy();
        echo "<script>";
        echo 'alert("Logout Berhasil."); ';
        echo 'window.location.href = "index.php?page=login";';
        echo '</script>';
    }
}