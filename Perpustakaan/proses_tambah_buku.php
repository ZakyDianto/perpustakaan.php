<?php
$nama = $_POST['nama_buku'];
$pengarang_buku = $_POST['pengarang_buku'];
$deskripsi = $_POST['deskripsi_buku'];
$foto = basename($_FILES["foto"]["name"]);
$target_dir = "cover_buku/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));        
if(empty($nama)){
    echo "<script>alert('Nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
}
elseif(empty($pengarang_buku)){
    echo "<script>alert('Nama pengarang buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
} 
elseif(empty($deskripsi)){
    echo "<script>alert('Deskripsi buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
}  
elseif(empty($foto)){
    echo "<script>alert('Foto buku tidak boleh kosong');location.href='tambah_buku.php';</script>";     
}

?>