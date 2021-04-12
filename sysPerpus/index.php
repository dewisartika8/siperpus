<?php
  include 'ceklogin.php';
  include 'function.php';

  // Menampilkan Informasi Buku di Perpustakaan
  $judulbuku = mysqli_query($conn, "SELECT * FROM tblbuku");
  $resultjudulbuku = mysqli_num_rows($judulbuku);

  $jumlahbuku = mysqli_query($conn, "SELECT SUM(jumlah) AS TOTAL FROM tblbuku ");
  $resultjumlahbuku = mysqli_fetch_array($jumlahbuku)[0];

  $jenisbuku = mysqli_query($conn, "SELECT COUNT(DISTINCT jenis) AS jenis FROM tblbuku");
  $resultjenisbuku = mysqli_fetch_array($jenisbuku)[0];

  $pinjambuku = mysqli_query($conn, "SELECT * FROM tblpinjam WHERE status = 'Pending' OR status = 'Dibaca'");
  $resultpinjambuku = mysqli_num_rows($pinjambuku);
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <!-- Side Navbar -->
    <?php include 'navbar.php'; ?>
    <div class="page">
      <?php include 'header.php'; ?>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Buku</strong>
                  <div class="count-number"><?= $resultjumlahbuku; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Judul Buku</strong>
                  <div class="count-number"><?= $resultjudulbuku; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Jenis Buku</strong>
                  <div class="count-number"><?= $resultjenisbuku; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-paper-airplane"></i></div>
                <div class="name"><strong class="text-uppercase">Dipinjam</strong>
                  <div class="count-number"><?= $resultpinjambuku; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php 
        $myuname = $datauser["username"];
        $kueri = query("SELECT * FROM tblpesan WHERE penerima = '$myuname' ORDER BY id DESC");
      ?>
      <div>
        <center>
        <td align= "center"> <?php echo "<img src='img/avatar/perpus.jpeg' widht='200' height='400'/>";?></td>
      </center>
      </div>

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p><a href="https://www.instagram.com/_dewisiburian">Kelompok 4 PABI D3TK18</a> &copy; <span id="year-cred"></span></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>