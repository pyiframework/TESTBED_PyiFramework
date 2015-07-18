
<?php

if (!defined('PYI_REL_DIR')) {
		define('PYI_REL_DIR', './');
	}

	require(PYI_REL_DIR . 'pyiconfig.php');

?>
<?php $path = $root; $path .= 'inc/doc.php'; include $path;?>

<!--
Pyi Framework Default - sample subfolder page
v1.0.0
Last Updated: July 08 2015
Pyi Framework: http://pyiframework.github.io
Twitter: @PyiFramework
Author: Kevin Pybus - http://KevinPybus.com
Twitter: @KevinPybus
-->

<title>Another Unique Page Title</title>

<!-- ADD ANY ADDITIONAL CSS OR JS REQUIRED FOR THIS PAGE HERE -->

<?php $path = $root; $path .= 'inc/header.php'; include $path;?>

<?php $path = $root; $path .= 'inc/top-nav.php'; include $path;?>

<!-- START PAGE CONTENT -->

<div class="wrap-main">
  <h1>Neat!</h1>
	<p>This is a subfolder page. It's just here as an example and you can delete it if you want.</p>
  <p>This code is exactly the same as the root index.php.</p>
</div>

<!-- END PAGE CONTENT -->

<?php $path = $root; $path .= 'inc/footer.php'; include $path;?>

<?php $path = $root; $path .= 'inc/footer-scripts.php'; include $path;?>
