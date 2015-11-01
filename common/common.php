<?php 
	function writeFile($filePath, $content){
		$file = fopen($filePath,"a");
		fwrite($file, $content);
		fclose($file);
	}

	function subscribeFile($filePath, $content){
		$file = fopen($filePath,"w");
		fwrite($file, $content);
		fclose($file);
	}
?>