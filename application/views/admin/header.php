<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
    	<div class="container">
	      <a class="navbar-brand" href="<?php echo base_url('admin/AdminDashboard');?>">
	      	<img src="" alt="Codeigniter Project" />
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="<?php echo base_url('admin/admin_bloglist') ?>">Blog</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="<?php echo base_url('admin/admin_category') ?>">Categories</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="<?php echo base_url('admin/admin_page') ?>">Pages</a>
	          </li>
	          
	        </ul>
            <ul class="navbar-nav ml-auto">
                <!--li class="nav-item">
                  <a href="dashboard.html" class="nav-link">Admin Dashboard</a>
                </li-->
				<?php if($this->session->userdata('id')){?>
                <li class="nav-item">
                  <a href="<?php echo base_url('admin/logout'); ?>" class="nav-link">Logout</a>
                </li>
				<?php } ?>
            </ul>
	      </div>
  		</div>
    </nav>