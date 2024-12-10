<?php
if($_GET['id']){
    include "koneksi.php";
    $id_peminjaman_buku=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "SELECT * FROM peminjaman_buku WHERE id_peminjaman_buku = '".$id_peminjaman_buku."'");
    $dt_pinjam=mysqli_fetch_array($cek_terlambat);
    
    if (strtotime($dt_pinjam ['tanggal_kembali'])>=strtotime(date('Y-m-d'))) {
        $denda=0;
    }
    else{
        $harga_denda_perhari= 5000;
        $harga_kembali= new DateTime();
        $tgl_harus_kembali= new DateTime($dt_pinjam['tanggal_kembali']);
        $selisih_hari= $tanggal_kembali->diff($tgl_harus_kembali)->d;
        $denda= $selisih_hari*$harga_denda_perhari;
    }
    mysqli_query($conn, "INSERT INTO pengembalian_buku(id_peminjaman_buku, tanggal_pengembalian, denda) VALUE ('".$id_peminjaman_buku."', '".date('Y-m-d')."', '".$denda."')");

    header('location: histori_peminjaman.php');
}
?>