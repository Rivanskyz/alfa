<!DOCTYPE
 html>
<html>
<head>
	<title>
m  </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/admin.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/jquery-ui/jquery-ui.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js' ?>"></script>  
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">m</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'index.php/admin/' ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url().'index.php/admin/kategori' ?>">Category</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url().'index.php/admin/pengaturan' ?>">Web</a></li>        
    
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo strtoupper($this->session->userdata('nama')) ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">            
            <li><a href="<?php echo base_url().'index.php/user/tambah_titik' ?>">Tambah Titik</a></li>            
            <li class="divider"></li>
            <li><a href="<?php echo base_url().'index.php/login/logout' ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>