<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Regisrasi</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Entry Barang</h1>
                <form action="insBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="l1" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" placeholder="ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="l2" class="form-label">Nama barang</label>
                        <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="l3" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="hrg" name="thrg" placeholder="Harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="l4" class="form-label">Jml Stok</label>
                        <input type="text" class="form-control" id="jml" name="tjml" placeholder="Stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="l5" class="form-label">keterangan</label>
                        <input type="text" class="form-control" id="ket" name="tket" placeholder="keterangan" required>
                    </div>
                    <div class="mb-3">
                        <label for="l6" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>