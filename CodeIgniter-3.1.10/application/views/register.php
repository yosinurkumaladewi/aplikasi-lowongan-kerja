<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>jOB.SI | Situs Lowongan Pencari Kerja</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link><css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('admin_template/');?>css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url('admin_template/');?>css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?php echo base_url('admin_template/');?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('admin_template/');?>css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
  
  <div class="navbar navbar-fixed-top">
  
<div class="navbar-inner">
    
   <!-- <div class="container">
      
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>-->
      
          <div class="account">
        <div class="content clearfix"></div>

    
 
      
      <!--<div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="">           
            <a href="<?php echo base_url('index.php/kontrol/login/');?>" class="">
              Already have an account? Login now
            </a>
            
          </li>
          <!--<li class="">           
            <a href="<?php echo base_url('index.php/kontrol/awal/');?>" class="">
              <i class="icon-chevron-left"></i>
              Back to Homepage
            </a>
            
          </li>-->
        </ul>
        
      </div><!--/.nav-collapse -->  
  
    </div> <!-- /container -->
     
  </div> <!-- /navbar-inner -->
  
</div> <!-- /navbar -->



<div class="account-container register">
  
  <div class="content clearfix">
    
    <form action="<?php echo base_url('index.php/kontrol/reg') ?>" method="post">
    
      <h1>REGISTRASI</h1>   
       <?php 
        $pesan = $this->session->flashdata('pesan');
        $type = $this->session->flashdata('type');
        if ($pesan) {
          echo '<div class="alert alert-'.$type.'">'.$pesan.'
          <button class="close" data-dismiss="alert">x</button></div>';
        }
         ?>   
      
      <div class="login-fields">
        
        <p>Tolong Isi Data Registrasi Anda Untuk Login</p>
      
        
        <input type="hidden" name="id_user">
        <div class="field">
          <label for="lastname">username:</label>  
          <input type="text" id="username" name="username"  placeholder="username" class="register username"  />
        </div> <!-- /field -->
        

        
        <div class="field">
          <label for="email">Email Address:</label>
          <input type="text" name="email" placeholder="Email" class="email"/>
        </div> <!-- /field -->
        
        <div class="field">
          <label for="password">Password:</label>
          <input type="password" name="password" placeholder="Password" class="login"/>
        </div> <!-- /field -->
        <div class="field">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password"  name="confirm_password"  placeholder="Confirm Password" class="login"/>
        </div> <!-- /field -->

        <div class="field">
          <label for="level">Pilih:</label>
          <select name="level" class="login">
            <option value="2">Perusahaan</option>
            <option value="3">Pelamar</option>
          </select>
        </div>
        
      </div> <!-- /login-fields -->
      
      <div class="login-actions">
        
        <!--<span class="login-checkbox">
          <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
          <label class="choice" for="Field">Agree with the Terms & Conditions.</label>
        </span>-->
                  
        <button class="button btn btn-primary btn-large" type="submit">Register</button>
        
      </div> <!-- .actions -->
      
    </form>
    
  </div> <!-- /content -->
  
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
  Sudah Memiliki Akun? <a href="<?php echo base_url('index.php/kontrol/login/');?>">Silakan klik Disini</a>
</div> <!-- /login-extra -->


<script src="<?php echo base_url('admin_template/');?>js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url('admin_template/');?>js/bootstrap.js"></script>

<script src="<?php echo base_url('admin_template/');?>js/signin.js"></script>

</body>

 </html>
