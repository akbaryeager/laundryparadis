<!DOCTYPE html>
<html>

<head>
    <title>SISTEM PARADISE FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body style="background: #f0f0f0">

    <?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
?>
    <nav class="navbar navbar-inverse" style="border-radius: 0px">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PARADISE LAUNDRY</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
                    <li><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
                    <li><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
                    <li><a href="harga.php"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
                </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text">Halo, <b> <?php echo $_SESSION['username']; ?></b> !</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>