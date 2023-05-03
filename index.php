<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Login</title>
    <style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 600px;
    }
    .item {
        width: 40%;
        padding: 20px;
        border: 3px solid grey;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="center">
            <div class="item">
                <h2 class="text-center">Login Administrator</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <input type="text" class="form-control" name="tuser" placeholder="user">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="tpass" placeholder="password">
                    </div>
                    <div class="mb-3" text-center>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>

                <?php
                    session_start();
                    include "koneksi.php";

                    $username = "";
                    $password = "";
                    if (isset($_POST["tuser"])) {
                        $user = $_POST["tuser"];
                        $pass = $_POST["tpass"];
                        $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
                        $hasil = $conn->query($sql);
                        while ($rec = $hasil->fetch_assoc()) {
                            $iduser = $rec["iduser"];
                            $username = $rec["username"];
                            $password = $rec["password"];
                        }
                        if ($user == $username && $pass = $password) {
                            $_SESSION["iduser"] = $iduser;
                            $_SESSION["username"] = $username;
                            header("location:dashboard.php");
                        } else {
                            if ($user != "")
                                echo "<div style='text-align:center;'>User tidak valid...</div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>