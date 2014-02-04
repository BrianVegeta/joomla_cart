<?php // no direct access
defined('_JEXEC') or die('Restricted access');

//dump ($cart,'mod cart');
// Ajax is displayed in vm_cart_products
// ALL THE DISPLAY IS Done by Ajax using "hiddencontainer" ?>

<!-- Virtuemart 2 Ajax Card -->
<!--
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#">Link</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
		</li>
	</ul>	
-->
<ul class="nav navbar-nav navbar-right vmCartModule <?php echo $params->get('moduleclass_sfx'); ?>" id="vmCartModule">
	<li class="dropdown">
	  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	  <ul class="dropdown-menu vm_cart_products">
	  	<?php foreach ($data->products as $product): ?>
		    <li>
		    	<div class="product_row">
						<span class="quantity"><?php echo  $product['quantity'] ?></span>&nbsp;x&nbsp;<span class="product_name"><?php echo  $product['product_name'] ?></span>
					</div>
		    </li>
		  <?php endforeach; ?>  
	  </ul>
	</li>
</ul>	
<div class="vmCartModule <?php echo $params->get('moduleclass_sfx'); ?>" id="vmCartModule">
<?php
if ($show_product_list) {
	?>
	<div class="vm_cart_products">
		<div class="container">

		<?php
			foreach ($data->products as $product)
		{
			if ($show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
				  <div class="prices" style="float: right;"><?php echo  $product['prices'] ?></div>
				<?php } ?>
			<div class="product_row">
				<span class="quantity"><?php echo  $product['quantity'] ?></span>&nbsp;x&nbsp;<span class="product_name"><?php echo  $product['product_name'] ?></span>
			</div>
			<?php if ( !empty($product['product_attributes']) ) { ?>
				<div class="product_attributes"><?php echo $product['product_attributes'] ?></div>

			<?php }
		}
		?>
		</div>
	</div>
<?php } ?>
<?php if ($data->totalProduct and $show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
	<div class="total" style="float: right;">
		<?php echo $data->billTotal; ?>
	</div>
<?php } ?>
<div class="total_products"><?php echo  $data->totalProductTxt ?></div>
<div class="show_cart" rel="nofollow">
	<?php if ($data->totalProduct) echo  $data->cart_show; ?>
</div>
<div style="clear:both;"></div>

<noscript>
<?php echo JText::_('MOD_VIRTUEMART_CART_AJAX_CART_PLZ_JAVASCRIPT') ?>
</noscript>
</div>

