<?php
session_start();
if(!isset($_SESSION['username'])){
    die("<b>Oops!</b> Access Failed.
    <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
    <button type='button' onclick=location.href='../../index.php'>Back</button>");
}
if($_SESSION['hak_akses']!="Admin"){
    die("<b>Oops!</b> Access Failed.
    <p>Anda Bukan Admin.</p>
    <button type='button' onclick=location.href='../../index.php'>Back</button>");
}
include_once 'header.php';
?>
<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
       <h1><small></small></h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        </ol>
    </section>
    <?php
      // include "dist/koneksi.php";

      // $PergantianBrg =mysql_query("SELECT * FROM tb_pergantian_barang");
      // $jmlPergantianBrg = mysql_num_rows($PergantianBrg);
      
      // $PengajuanBrg =mysql_query("SELECT * FROM tb_pengajuan_barang");
      // $jmlPengajuanBrg = mysql_num_rows($PengajuanBrg);

      // $inv =mysql_query("SELECT * FROM tb_inventaris");
      // $jmlinventaris = mysql_num_rows($inv);

      // $user =mysql_query("SELECT * FROM tb_user");
      // $jmlUser = mysql_num_rows($user);
    ?>
    <section class="content">
        <div class="row">
      
        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><!-- <?=$jmlinventaris?> -->1</h3>
              <p>Data User</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <p class="small-box-footer"><a style="color:white" href="home-admin.php?page=form-master-inventaris">Detail  <i class="fa fa-arrow-circle-right"></i></a></p>
          </div>
        </div>

        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>5<!-- <?=$jmlUser?> --></h3>
              <p>Data Mitra</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <p class="small-box-footer"><a style="color:white" href="home-admin.php?page=form-master-user">Detail <i class="fa fa-arrow-circle-right"></i></a></p>
          </div>
        </div>

       <!--  <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$jmlPergantianBrg?></h3>
              <p>Permintaan Pergantian Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-calendar"></i>
            </div>
            <p class="small-box-footer"><a style="color:white" href="home-admin.php?page=form-barang-ganti">Detail <i class="fa fa-arrow-circle-right"></i></a></p>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$jmlPengajuanBrg?></h3>
              <p>Permintaan Pengajuan Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-pricetags"></i>
            </div>
            <p class="small-box-footer"><a style="color:white" href="home-admin.php?page=form-barang-baru">Detail <i class="fa fa-arrow-circle-right"></i><a/></p>
          </div>
        </div> -->
    </div>
    </section>
  </div>  
</div>
<?php 
include 'footer.php';
 ?>