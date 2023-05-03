<?php
session_start();
if (isset($_SESSION["username"]))
    $user = $_SESSION["username"];
else
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>DASHBOARD</title>
</head>
<body>
    <nav class="nav nav-pills flex-sm-row bg-warning">
        <a href="#" class="flex-sm-fill text-sm-start nav-link text-success disabled" aria-current="page">Dashboard</a>
        <a href="#" class="flex-sm-fill text-sm-start nav-link text-light disabled">User: <?= $user; ?> </a>
        <a href="logout.php" class="flex-sm-fill text-sm-start nav-link text-danger">Logout</a>
    </nav>
    <div class="container p-5">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listUser.php">
                            <img src="user.jpg" class="rounded mx-auto d-block" alt="..." style="height:150px; width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        User
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listbarang.php">
                            <img src="barang.png" class="rounded mx-auto d-block" alt="..." style="height:150px; width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Barang
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listOrder.php">
                            <img src="order.jpg" class="rounded mx-auto d-block" alt="..." style="height:150px; width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Order
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listKat.php">
                            <img src="shope.jpg" class="rounded mx-auto d-block" alt="..." style="height:150px; width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Kategori
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>