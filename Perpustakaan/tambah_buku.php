<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container">
    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
        Nama Buku:
        <input type="text" name="nama_buku" value="" class="form-control">
        Nama Pengarang:
        <input type="text" name="pengarang_buku" value="" class="form-control">
        Deskripsi:
        <textarea name="deskripsi_buku" cols="147" class="form-control"></textarea>
        Foto:
        <input type="file" name="foto" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-dark text-light">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>
</html>
