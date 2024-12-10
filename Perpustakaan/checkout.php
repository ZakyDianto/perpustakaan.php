<?php
session_start();
include "koneksi.php";
$cart=@$_SESSION['cart'];
if (count($cart)>0) {
    $lama_pinjam=5; //Satuan Hari (5 hari anggap saja 1 minggu peminjaman)
    $tgl_harus_kembali = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + $lama_pinjam, date('Y')));
    mysqli_query($conn,"INSERT INTO peminjaman_buku(id_siswa, tanggal_pinjam, tanggal_kembali) 
    values('".$_SESSION['id_siswa']."', '".date('Y-m-d')."','".$tgl_harus_kembali."')");
    
    $id=mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($conn, "INSERT INTO detail_peminjaman_buku(id_peminjaman_buku, id_buku, qty)
        values ('".$id."','".$val_produk['id_buku']."','".$val_produk['qty']."')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil meminjam buku");location.href="histori_peminjaman.php"</script>';
}
?>