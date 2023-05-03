<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container mt-3 w-50">
        <?php
            include "koneksi.php";
            include "uploadFoto.php";

            $id = $_POST["tid"];
            $nama = $_POST["tnama"];
            $ket = $_POST["tket"];
            $foto_lama = $_POST["foto_lama"];
            $qry = true;
            $flagFoto = true;

            if (isset($_POST["ubah_foto"])) {
                if (upload_foto($_FILES["foto"], "kategori")) {
                    $foto = $_FILES["foto"]["name"];
                    $sql = "UPDATE kategori SET nama_kategori='$nama', keterangan='$ket', foto='$foto' WHERE id='$id'";
                } else {
                    $qry = false;
                    echo "<p>Foto gagal diupload.</p>";
                    echo "<a href='listKat.php'>Kembali ke List Kategori</a>";
                }
            } else {
                $sql = "UPDATE kategori SET nama_kategori='$nama', keterangan='$ket' WHERE id = '$id'";
                $flagFoto = false;
            }

            if ($qry == true) {
                if ($conn->query($sql) === TRUE) {
                    if (is_file("img/" . $foto_lama) && ($flagFoto == true)) // Jika gambar ada
                        unlink ("img/" . $foto_lama);
                    $conn->close();
                    header("location: listKat.php");
                } else {
                    $conn->close();
                    // echo "New records failed";
                }
            }
        ?>
    </main>
</body>
</html>
    