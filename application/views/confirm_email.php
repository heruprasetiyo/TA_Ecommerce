<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('header');?>
  </head>
<body>
<!-- Navbar ================================================== -->
<?php $this->load->view('navbar');?>
</div>
</div>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php $this->load->view('sidebar');?>
<!-- Sidebar end=============================================== -->
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li><a href="index.html">Keranjang</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<div class="row">
		<div class="span4 offset2">
			<div class="well">
			<h5>HARAP ISI BIODATA</h5><br/>
			Gunakan No Handphone yang valid untuk pemberitahuan<br/><br/><br/>
			<form action="<?php echo site_url('welcome/prosestransaksi');?>" method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Nama</label>
				<div class="controls">
				  <input name="nama" class="span3"  type="name" id="inputEmail0" placeholder="Nama">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">No. Handphone</label>
				<div class="controls">
				  <input name="nope" class="span3"  type="number" id="inputEmail0" placeholder="No HP">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Alamat Lengkap</label>
				<div class="controls">
				  <textarea name="alamat" class="span3"></textarea>
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
	</div>	
	
</div>
</div></div>
</div>

<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
	<div>
			<center><p>copyright : Carstore 2020</p></center>
</div>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
	
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
    <script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
</body>
</html>