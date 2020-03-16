<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jOB.SI | Situs Lowongan Pencari Kerja</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php  echo base_url('admin_template/'); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/font-awesome.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/style.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/pages/dashboard.css" rel="stylesheet">

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php  echo base_url('admin_template/'); ?> index.php">Dasboard pelamar</a>
      <div class="nav-collapse">  
        <ul class="nav pull-right">
          <li><a href="<?php echo base_url('index.php/kontrol/logout');?>"><i class="icon-cog"></i> Log Out</a>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <?php
        $uri = $this->uri->segment(2);
        ?>
        <li <?php if($uri == "" || $uri == "home_lamar"){echo "class='active'";} ?>><a href="home_lamar"><i class="icon-bar icon-home"></i><span>Home</span> </a> </li>

        <li <?php if($uri == "lowongan_lamar"){echo "class='active'";} ?>>
          <a href="lowongan_lamar"> <i class="icon-bar icon-search"></i><span>Data Lowongan</span> <b class="caret"></b>
          </a>
          <!-- <ul class="dropdown-menu">
            <li><a href="#">Administrasi</a></li>
            <li><a href="#">Programmer</a></li>
            <li><a href="#">pemasaran</a></li>
            <li><a href="#">teknik</a></li>
            <li><a href="#">perbankan</a></li>
          </ul> -->
        </li>
        
        <li <?php if($uri == "profil_lamar"){echo "class='active'";} ?>><a href="profil_lamar"><i class="icon-bar icon-question-sign"></i><span>Profil</span> </a> </li>
      </ul>
    </div>
  </div>
</div>