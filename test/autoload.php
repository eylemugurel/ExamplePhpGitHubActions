<?php
spl_autoload_register(function($qualifiedClassName) {
	$filePath = rtrim(__DIR__, '/\\')
	          . '/../source/classes/'
	          . str_replace('\\', '/', $qualifiedClassName)
	          . '.php';
	if (!is_file($filePath))
		return;
	require $filePath;
});
?>