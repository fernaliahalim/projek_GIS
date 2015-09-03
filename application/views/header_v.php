<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.cs"/>
    </head>
    <body>
    	<nav class="navbar navbar-default" role="navigation">
        	<div class="container">
            	<div class="navbar-header">
                	<a class="navbar-brand" href="#">Badan Survei Makanan dan Minuman Kota Bogor</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    	<span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="menu" class="collapse navbar-collapse navbar-right" >
                	<ul class="nav navbar-nav">
                    	<li><a href="<?php echo site_url();?>index.php/beranda">Beranda</a></li>
                        <li><a href="<?php echo site_url();?>index.php/foto">Peta Persebaran</a></li>
                        <li><a href="<?php echo site_url();?>index.php/style">Style</a></li>
                        <li><a href="<?php echo site_url();?>index.php/laporan">Laporan</a></li>
                        <!--<li><a href="<?php //echo site_url();?>index.php/pk">Program Keahlian</a></li>
						<li><a href="<?php //echo site_url();?>index.php/mhs">Mahasiswa</a></li>-->
                    </ul>
					
					<!--<div class="navbar-right">
                    	<?php //if($this->session->userdata('username')==''){ ?>
						<a href="<?php //echo site_url();?>index.php/login" 
						class="btn btn-primary navbar-btn">
							<span class="glyphicon glyphicon-log-in"></span> Login
						</a>
                        <?php //}
						   //else{ ?>
                           <a href="<?php //echo site_url();?>index.php/logout" 
						class="btn btn-primary navbar-btn">
							<span class="glyphicon glyphicon-log-in"></span> Logout
						</a>
                        <?php //} ?>
                        <?php //if($this->session->userdata('username')==''){ ?>
                        <a href="buatakun" class="btn btn-danger navbar-btn">
							<span class="glyphicon glyphicon-user"></span>Buat Akun
						</a>
                        <?php //}
						   //else{ ?>
						<!--<a href="#" class="btn btn-danger navbar-btn">-->
							<!--<span class="glyphicon glyphicon-user"></span><?php //echo $this->session->userdata('username'); ?>
						<!--</a>-->
                       <!-- <?php //} ?>
                </div>-->
            </div>
        </nav>
        <div class="jumbotron" style="margin-bottom:0;">
        	<div class="container">
            	<div class="row">
					<div class="col-md-9 text-muted">
						<h1>
							<small> Badan Survei Makanan dan Minuman</small><br/>
                            <small> Kota Bogor</small>
						</h1>
					</div>
				<div>	
            </div>
        </div>