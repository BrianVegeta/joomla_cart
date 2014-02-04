<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<?php 
			$search = array('mootools', 'caption.js', 'core', 'modal');
	    // remove the js files
	    foreach($this->_scripts as $key => $script) {
	        foreach($search as $findme) {
	            if(stristr($key, $findme) !== false) {
	                unset($this->_scripts[$key]);
	            }
	        }
	    }
		?>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>

		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>

		<!-- bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></a>
        </div>
        <div class="navbar-collapse collapse">
        	<jdoc:include type="module" name="virtuemart_category" style="custom" />
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
		<div class="container">
			<?php if($this->countModules('atomic-search') or $this->countModules('position-0')) : ?>
				<div class="joomla-search span-7 last">
	  	 			<jdoc:include type="modules" name="atomic-search" style="none" />
	  	 			<jdoc:include type="modules" name="position-0" style="none" />
				</div>
			<?php endif; ?>
		</div>
		<?php if($this->countModules('atomic-topmenu') or $this->countModules('position-2') ) : ?>
			<jdoc:include type="modules" name="atomic-topmenu" style="container" />
			<jdoc:include type="modules" name="position-1" style="container" />
		<?php endif; ?>

		<div class="container">
			<div class="span-16 append-1">
				
			</div>
			<?php if($this->countModules('atomic-sidebar') || $this->countModules('position-7')
			|| $this->countModules('position-4') || $this->countModules('position-5')
			|| $this->countModules('position-3') || $this->countModules('position-6') || $this->countModules('position-8'))
			: ?>
				<div class="span-7 last">
					
					<jdoc:include type="modules" name="atomic-sidebar" style="sidebar" />
					<jdoc:include type="modules" name="position-7" style="sidebar" />
					<jdoc:include type="modules" name="position-4" style="sidebar" />
					<jdoc:include type="modules" name="position-5" style="sidebar" />
					<jdoc:include type="modules" name="position-6" style="sidebar" />
					<jdoc:include type="modules" name="position-8" style="sidebar" />
					<jdoc:include type="modules" name="position-3" style="sidebar" />
				</div>

			<?php endif; ?>

			<div class="joomla-footer span-16 append-1">
				<hr />
				&copy;<?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
			</div>
		</div>
		<jdoc:include type="modules" name="debug" />
	</body>
</html>
