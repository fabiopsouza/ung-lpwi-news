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

	//return string
	function getSecurityContent(){
		$file = "../security/security.txt";
		$content = file_get_contents($file);
		
		//Remove last pipe (|)
		$content = rtrim($content, "|");

		return $content;
	}

	//return boolean
	function assertNotEqualsValuesInArray($array){
		foreach ($array as $itemDad) { 
			$count = 0;

			foreach ($array as $itemSon) {
				if($itemSon == $itemDad){
					$count++;
				}
			}

			if($count > 1){
				return false;
			}
		}

		return true;
	}
?>