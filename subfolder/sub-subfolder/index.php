
<?php

if (!defined('PYI_REL_DIR')) {
		define('PYI_REL_DIR', './');
	}

	require(PYI_REL_DIR . 'pyiconfig.php');

?>

<?php include PYI_ROOT . 'inc/doc.php'; ?>

<!--
Pyi Framework Default - sample sub-subfolder page
v1.0.0
Last Updated: July 08 2015
Pyi Framework: http://pyiframework.github.io
Twitter: @PyiFramework
Author: Kevin Pybus - http://KevinPybus.com
Twitter: @KevinPybus
-->

<title>Yet Another Unique Page Title</title>

<!-- ADD ANY ADDITIONAL CSS OR JS REQUIRED FOR THIS PAGE HERE -->

<?php include PYI_ROOT . 'inc/header.php'; ?>

<?php include PYI_ROOT . 'inc/top-nav.php'; ?>

<!-- START PAGE CONTENT -->

<div class="wrap-main">
  <h1>We Must Go Deeper</h1>
  <p>This is a sub-subfolder page. It's just here as an example and you can delete it if you want.</p>
  <p>This code is exactly the same as the root (and subfolder) index.php.</p>
</div>

<!-- END PAGE CONTENT -->

<?php include PYI_ROOT . 'inc/footer.php'; ?>

<?php include PYI_ROOT . 'inc/footer-scripts.php'; ?>
