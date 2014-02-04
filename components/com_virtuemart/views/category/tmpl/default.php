<?php
/**
 *
 * Show the products in a category
 *
 * @package    VirtueMart
 * @subpackage
 * @author RolandD
 * @author Max Milbers
 * @todo add pagination
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default.php 6556 2012-10-17 18:15:30Z kkmediaproduction $
 */

//vmdebug('$this->category',$this->category);
//vmdebug ('$this->category ' . $this->category->category_name);
// Check to ensure this file is included in Joomla!
defined ('_JEXEC') or die('Restricted access');
JHTML::_ ('behavior.modal');
/* javascript for list Slide
  Only here for the order list
  can be changed by the template maker
*/
$js = "
jQuery(document).ready(function () {
	jQuery('.orderlistcontainer').hover(
		function() { jQuery(this).find('.orderlist').stop().show()},
		function() { jQuery(this).find('.orderlist').stop().hide()}
	)
});
";

$document = JFactory::getDocument ();
$document->addScriptDeclaration ($js);

if (empty($this->keyword) and !empty($this->category)) {
	?>
<div class="category_description">
	<?php echo $this->category->category_description; ?>
</div>
<?php } ?>



<style type="text/css">
.product-price {
	color: red;
}
.price-lg {
	font-size: 40px;
}
.price-mid {
	font-size: 30px;
}
.price-sm {
	font-size: 16px;
}
</style>
<?php if (!empty($this->products)): ?>
	<?php $product = $this->products[0]; ?>
	<div class="row">
		<div class="col-md-6" style="margin-bottom: 20px;">
			<?php 
				if ($product->file_url === 'images/stories/virtuemart/product/') {
					$img_src = 'components/com_virtuemart/assets/images/vmgeneral/noimage.gif';
				} else {
					$img_src = $product->file_url;
				}
			?>
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo $img_src; ?>" class="img-rounded" style="width: 100%; border: solid #CAC9C9 1px;">
				</div>
				<div class="col-md-6">
					<h4><?php echo JHTML::link ($product->link, $product->product_name); ?></h4>
					<?php if (!empty($product->product_s_desc)) {
						?>
						<p class="product_s_desc">
							<?php echo shopFunctionsF::limitStringByWord ($product->product_s_desc, 40, '...') ?>
						</p>
					<?php } ?>
					<div class="product-price price-lg marginbottom12" id="productPrice<?php echo $product->virtuemart_product_id ?>">
						<?php
						if ($this->show_prices == '1') {
							if ($product->prices['salesPrice']<=0 and VmConfig::get ('askprice', 1) and  !$product->images[0]->file_is_downloadable) {
								echo JText::_ ('COM_VIRTUEMART_PRODUCT_ASKPRICE');
							}
							//todo add config settings
							if ($this->showBasePrice) {
								echo $this->currency->createPriceDiv ('basePrice', 'COM_VIRTUEMART_PRODUCT_BASEPRICE', $product->prices);
								echo $this->currency->createPriceDiv ('basePriceVariant', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_VARIANT', $product->prices);
							}
							echo $this->currency->createPriceDiv ('variantModification', 'COM_VIRTUEMART_PRODUCT_VARIANT_MOD', $product->prices);
							if (round($product->prices['basePriceWithTax'],$this->currency->_priceConfig['salesPrice'][1]) != $product->prices['salesPrice']) {
								echo '<div class="price-crossed" >' . $this->currency->createPriceDiv ('basePriceWithTax', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_WITHTAX', $product->prices) . "</div>";
							}
							if (round($product->prices['salesPriceWithDiscount'],$this->currency->_priceConfig['salesPrice'][1]) != $product->prices['salesPrice']) {
								echo $this->currency->createPriceDiv ('salesPriceWithDiscount', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT', $product->prices);
							}
							echo $this->currency->createPriceDiv ('salesPrice', 'COM_VIRTUEMART_PRODUCT_SALESPRICE', $product->prices);
							if ($product->prices['discountedPriceWithoutTax'] != $product->prices['priceWithoutTax']) {
								echo $this->currency->createPriceDiv ('discountedPriceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices);
							} else {
								echo $this->currency->createPriceDiv ('priceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices);
							}
							echo $this->currency->createPriceDiv ('discountAmount', 'COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT', $product->prices);
							echo $this->currency->createPriceDiv ('taxAmount', 'COM_VIRTUEMART_PRODUCT_TAX_AMOUNT', $product->prices);
							$unitPriceDescription = JText::sprintf ('COM_VIRTUEMART_PRODUCT_UNITPRICE', $product->product_unit);
							echo $this->currency->createPriceDiv ('unitPrice', $unitPriceDescription, $product->prices);
						} ?>

					</div>
					<?php echo JHTML::link ($product->link, JText::_ ('COM_VIRTUEMART_PRODUCT_DETAILS'), array('title' => $product->product_name, 'class' => 'product-details')); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="margin-bottom: 20px;">
			<?php 
				$model = VmModel::getModel('Manufacturer'); 
				$manufacturers = $model->getManufacturers(true, true,true);
			?>
			<?php foreach ($manufacturers as $key => $manufacturer): ?>
				<div><?php echo $manufacturer->mf_name; ?></div>
			<?php endforeach; ?>
		</div>
	</div>
	
<?php endif; ?>