<?php
if ($_POST) {
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo "<script>alert('Nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
    elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
    elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
    else{
        include "koneksi.php";
        $insert=mysqli_query($conn, "INSERT INTO siswa (nama_siswa, tanggal_lahir, gender, alamat, username, password, id_kelas) value ('".$nama_siswa."', '".$tanggal_lahir."', '".$gender."', '".$alamat."', '".$username."', '".md5($password)."', '".$id_kelas."')") or die(mysqli_error($conn));
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        }
        else{
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }

        }
    }
?>