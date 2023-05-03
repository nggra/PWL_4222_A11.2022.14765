<?php
    include "koneksi.php";
    include "uploadFoto.php";

    $id = $_POST["tid"];
    $nama = $_POST["tnama"];
    $hrg = $_POST["thrg"];
    $ket = $_POST["tket"];
    $jml = $_POST["tjml"];
    $foto_lama = $_POST["foto_lama"];
    $qry = true;
    $flagFoto = true;

    if (isset($_POST["ubah_foto"])) {
        if (upload_foto($_FILES["foto"], "barang")) {
            $foto = $_FILES["foto"]["name"];
            $sql = "UPDATE barang SET nama='$nama', hrg='$hrg', jml='$jml', keterangan='$ket', foto='$foto' WHERE id='$id'";
        } else {
            $qry = false;
            echo "Foto gagal diupload";
        }
    } else {
        $sql = "UPDATE barang SET nama='$nama', hrg='$hrg', jml='$jml', keterangan='$ket' WHERE id='$id'";
        $flagFoto = false;
    }
    if ($qry == true) {
        if ($conn->query($sql) === TRUE) {
            if (is_file("img/". $foto_lama) && ($flagFoto == true)) // Jika gambar ada
                unlink("img/". $foto_lama);
            $conn->close();
            header("location:listbarang.php");
        } else {
            $conn->close();
            echo "New records failed";
        }
    }
?>