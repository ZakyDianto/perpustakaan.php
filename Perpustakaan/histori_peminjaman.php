<?php
    include "header.php";
?>

<h2>Histori Peminjaman Buku</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Harus Kembali</th>
        <th>Nama Buku</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>

    <tbody>

    <?php
        include "koneksi.php";
        
    $qry_histori=mysqli_query($conn,"SELECT * FROM peminjaman_buku ORDER BY id_peminjaman_buku DESC");
    $no=0;
    while($dt_histori=mysqli_fetch_array($qry_histori)){
        $no++;
    
    //Menampilkan buku yang dipinjam
    $buku_dipinjam="<ol>";
    
    $qry_buku=mysqli_query($conn,"SELECT * FROM  detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where id_peminjaman_buku = '".$dt_histori['id_peminjaman_buku']."'");
    
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        $buku_dipinjam.="<li>".$dt_buku['nama_buku']."</li>";
    }

    $buku_dipinjam.="</ol>";

    //Menampilkan status sudah kembali atau belum
    $qry_cek_kembali=mysqli_query($conn,"SELECT * FROM pengembalian_buku WHERE id_peminjaman_buku = '".$dt_histori['id_peminjaman_buku']."'");
    
    if (mysqli_num_rows($qry_cek_kembali)) {
        $dt_kembali=mysqli_fetch_array($qry_cek_kembali);
        $denda = "denda RP. ".$dt_kembali['denda'];
        $status_kembali = "<label class='alert alert-success'>Sudah Kembali <br>".$denda."</label>";
        $button_kembali=" ";
    }
    
    else{
        $status_kembali="<label class='alert alert-danger'>Belum Kembali</label>";
        $button_kembali="<a href='kembali.php?id=".$dt_histori['id_peminjaman_buku']."' class='btn btn-warning' onclick='return confirm(\"Yakin Ingin Mengembalikan?\")'>Kembalikan</a>";
    }
    ?>
    <tr>
        <td><?=$no?></td>
        <td><?=$dt_histori['tanggal_pinjam']?></td>
        <td><?=$dt_histori['tanggal_kembali']?></td>
        <td><?=$buku_dipinjam?></td>
        <td><?=$status_kembali?></td>
        <td><?=$button_kembali?></td>
    </tr>
    
    <?php
}
?>
</tbody>
</table>
<?php
    include "footer.php";
?>