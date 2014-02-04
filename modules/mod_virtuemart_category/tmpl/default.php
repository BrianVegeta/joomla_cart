<?php // no direct access
defined('_JEXEC') or die('Restricted access');
//JHTML::stylesheet ( 'menucss.css', 'modules/mod_virtuemart_category/css/', false );

/* ID for jQuery dropdown */
$ID = str_replace('.', '_', substr(microtime(true), -8, 8));
$js="
" ;

		$document = JFactory::getDocument();
		$document->addScriptDeclaration($js);?>
<ul class="nav navbar-nav"  >
	<?php foreach ($categories as $category) {
		$active_menu = '';
		$caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$category->virtuemart_category_id);
		$cattext = $category->category_name;
		//if ($active_category_id == $category->virtuemart_category_id) $active_menu = 'class="active"';
		if (in_array( $category->virtuemart_category_id, $parentCategories)) $active_menu = '';

	?>

		<li class="<?php echo $active_menu ?> <?php if ($category->childs) echo 'dropdown' ?>">
			<a href="<?php echo $caturl; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $cattext; ?> <b class="caret"></b></a>
			<?php if ($category->childs):?>
				<ul class="dropdown-menu">
					<?php foreach ($category->childs as $child): ?>
						<?php $caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$child->virtuemart_category_id);
									$cattext = $child->category_name; ?>
						<li><?php echo JHTML::link($caturl, $cattext); ?></li>						
					<?php endforeach; ?>
        </ul>
			<?php endif; ?>
		</li>
	<?php } ?>
</ul>
