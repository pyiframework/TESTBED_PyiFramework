<?php

  $rootPath = getenv('ROOT_PATH');
	if ($rootPath == null) {
		$root = $_SERVER['DOCUMENT_ROOT'] . '/';
	} else {
		$path = explode('?', $_SERVER['REQUEST_URI']);
		$pathArray = explode('/', $path[0]);
		unset($pathArray[0], $pathArray[1]);
		$howDeep = null;
		foreach ($pathArray as $pathCount) {
			$howDeep .= '../';
		}
		$root = dirname(__FILE__) . $howDeep;
		if ($howDeep == "../") {
			$root = null;
		}
	}

define('PYI_ROOT', $root);

?>
