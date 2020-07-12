	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="<?php echo site_url('welcome/cart');?>"><img src="<?php echo base_url('assets/bootshop/themes/images/ico-cart.png');?>" alt="cart"><?php echo $this->cart->total_items();?> Items in your cart  </a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="<?php echo site_url('welcome/kategori/Sedan');?>">Sedan</a></li>
			<li><a href="<?php echo site_url('welcome/kategori/MPV');?>">MPV</a></li>
			<li><a href="<?php echo site_url('welcome/kategori/SUV');?>">SUV</a></li>
			<li><a href="<?php echo site_url('welcome/kategori/DoubleCabin');?>">DoubleCabin</a></li>
			<li><a href="<?php echo site_url('welcome/kategori/Sport');?>">Sport</a></li>
		</ul>
		<br/>
	</div>