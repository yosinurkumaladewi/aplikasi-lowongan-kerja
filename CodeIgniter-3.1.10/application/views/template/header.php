<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jOB.SI | Situs Lowongan Pencari Kerja</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php  echo base_url('admin_template/'); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/media/css/'); ?>jquery.dataTables.min.css ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/media/css/'); ?>dataTables.bootstrap.min.css ?>">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/font-awesome.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/style.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Dasboard Petugas</a>
      <div class="nav-collapse">
       <ul class="nav pull-right">
          <li><a href="<?php echo base_url('index.php/kontrol/logout');?>"><i class="icon-cog"></i> Log Out</a>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li <?php if($this->uri->segment(2) == 'user' || $this->uri->segment(2) == ''){echo "class='active'";}else{} ?>><a href="<?php echo base_url('index.php/control/user/') ?>" ><i class="icon-bar icon-home"></i><span>Home</span> </a> </li>
        <li <?php if($this->uri->segment(2) == 'plmar'){echo "class='active'";}else{} ?>><a href="<?php echo base_url('index.php/control/plmar') ?> "><i class="icon-bar icon-search"></i><span>Data Pelamar</span> </a> </li>
        <li <?php if($this->uri->segment(2) == 'show_perusahaan'){echo "class='active'";}else{} ?>><a href="<?php echo base_url('index.php/control/show_perusahaan') ?>"><i class="icon-bar icon-legal"></i><span>Data Perusahaan</span> </a></li>
        <li <?php if($this->uri->segment(2) == 'jenis_lowongan'){echo "class='active'";}else{} ?>><a href="<?php echo base_url('index.php/control/jenis_lowongan') ?> "><i class="icon-bar icon-list"></i><span>Jenis Lowongan</span> </a> </li>
        <li <?php if($this->uri->segment(2) == 'profil_admin'){echo "class='active'";}else{} ?>><a href="profil_admin"><i class="icon-bar icon-question-sign"></i><span>Profil</span> </a> </li>
    
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
