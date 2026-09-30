<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php include 'partials/head.php' ?>
    <!-- HEAD END -->

<body>
    <div id="overlay" class="overlay"></div>
    <!-- TOPBAR -->
    <?php include 'components/topbar.php' ?>
    <!-- TOPBAR END -->

    <!-- SIDEBAR -->
    <?php include 'components/sidebar.php' ?>

    <!-- MAIN CONTENT -->
    <!-- fungi nya menampilkan halaman hanya dibagian main content saja -->
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
    switch ($page) {
        // untuk memberi nama halamannya
        case 'dashboard':
            // isinya apa/ mau di isi dengan bagian pages
            include 'pages/dashboard.php';
            // fungsi nya untuk menahan halaman agar tdk otomatis berpindah k halaman selanjutnya
            break;
        // kategori -> untuk halaman kategori
        case 'kategori':
            include 'pages/kategori/kategori.php';
            break;
        //untuk mengarahkan halaman awal yang akan dibuka
        default:
            include 'pages/dashboard.php';
            break;
    }
    ?>
    <!-- MAIN END -->

    <!-- SCRIPT -->
    <?php include 'partials/script.php' ?>
    <!-- SCRIPT END -->



</body>

</html>