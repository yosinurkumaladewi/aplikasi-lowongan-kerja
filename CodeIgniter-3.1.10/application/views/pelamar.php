<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jOB.SI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php  echo base_url('admin_template/'); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php  echo base_url('admin_template/'); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
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
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php  echo base_url('admin_template/'); ?> index.php">jasa pencarian lowongan kerja </a>
      <div class="nav-collapse">
        
        <ul class="nav pull-right">
          <li class="dropdown"><a href="<?php echo base_url('index.php/kontrol/register');?>" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Register</a>
            <!--<ul class="dropdown-menu">
              <li><a href="<?php  //echo base_url('admin_template/');?>javascript:;">Settings</a></li>
              <li><a href="<?php // echo base_url('admin_template/');?>javascript:;">Help</a></li>
            </ul>
          </li>-->
          <li class="dropdown"><a href="<?php  echo base_url('index.php/kontrol/login');?> " class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> LOGIN</a>
            <!--<ul class="dropdown-menu">
              <li><a href="<?php  //echo base_url('admin_template/');?>javascript:;">Profile</a></li>
              <li><a href="<?php  //echo base_url('admin_template/');?>javascript:;">Logout</a></li>
            </ul>-->
          </li>
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
        <li class="active"><a href=" " ><i class="icon-bar icon-home"></i><span>Home</span> </a> </li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-bar icon-search

        "></i><span>Data lowongan</span> <b class="caret"></b></a>
          <ul   class="dropdown-menu">
            <li><a href="">Administrasi</a></li>
            <li><a href="">Programmer</a></li>
            <li><a href="">pemasaran</a></li>
            <li><a href="">teknik</a></li>
            <li><a href="">perbankan</a></li>

            
          </ul>
        </li>
      
        <li><a href=" "><i class="icon-bar icon-question-sign"></i><span>profil</span> </a> </li>
        
    
             

      
        <li><a href=" "><i class="icon-bar icon-question-sign"></i><span>profil</span> </a> </li>
        
  
      
        <li><a href="<?php echo base_url('index.php/control/contact') ?> "><i class="icon-bar icon-question-sign"></i><span>contact</span> </a> </li>
        
    
      </ul>
        
    
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>