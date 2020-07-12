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
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="<?php echo base_url('uploads/'.$produk->gambar);?>" title="<?php echo $produk->brand;?> <?php echo $produk->model;?>">
				<img src="<?php echo base_url('uploads/'.$produk->gambar);?>" style="width:100%" alt="<?php echo $produk->brand;?> <?php echo $produk->model;?>"/>
            </a>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">
				<h3><?php echo $produk->brand;?> <?php echo $produk->model;?>  </h3>
				<small>- <?php echo $produk->dimensi;?></small>
				<hr class="soft"/>
				<form action="<?php echo site_url('welcome/add_to_cartdetail/'.$produk->id);?>" class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Rp. <?php echo number_format($produk->harga,0,',','.');?></span></label>
					<div class="controls">
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            
            
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2"><?php echo $produk->brand;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2"><?php echo $produk->model;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2020 </td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> <?php echo $produk->dimensi;?></td></tr>
				</tbody>
				</table>
				
				<?php echo $produk->keterangan;?>

          </div>

	</div>
</div>
</div> </div>
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