<?php
    include "koneksi.php";
    $id = $_GET["id"];

    $sql = "SELECT foto FROM kategori WHERE id = '$id'";
    $hasil = $conn->query($sql);
    while ($row = $hasil->fetch_assoc()) {
        $foto = $row["foto"];
    }
    if ($foto != "")
        unlink("img/" . $foto);
    $sql = "DELETE FROM kategori WHERE id = '$id'";

    if ($conn->query($sql) === TRUE)
        header("location: listKat.php");
    $conn->close();
?>