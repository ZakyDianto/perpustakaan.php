<?php
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <div class="row">
        <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($conn, "SELECT * FROM buku");
    while ($dt_buku=mysqli_fetch_array($qry_buku)) {
        ?>
        <div class="col-md-3">
            <div class="card">
                <img src="cover_buku/<?=$dt_buku['cover_buku']?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card_title"><?=$dt_buku['nama_buku']?></h5>
                    <p class="card_text"><?=substr($dt_buku['pengarang_buku'],0,500)?></p>
                    <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-dark">Pinjam</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>