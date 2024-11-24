<!DOCTYPE html>
<html lang="en">
<?php
// Sayfa parametresini al ve varsayılan olarak 'dashboard' yap
$page = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : 'dashboard';
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- AdminLTE Theme Style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php include_once 'navbar.php'; ?>

    <!-- Sidebar -->
    <?php include_once 'sidebar.php'; ?>

    <!-- Content -->
    <?php
    $content_page = "pages/{$page}.php"; // İçerik sayfasını kontrol et
    if (file_exists($content_page)) {
        include_once $content_page; // Sayfa bulunursa dahil et
    } else {
        include_once "pages/404.php"; // Sayfa bulunamazsa 404 sayfasını dahil et
    }
    ?>

    <!-- Control Sidebar -->
    <?php include_once 'control_sidebar.php'; ?>

    <!-- Footer -->
    <?php include_once 'footer.php'; ?>

</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
