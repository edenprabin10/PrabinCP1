<?php
if(!empty($_GET['file'])){

	$fileName=basename(($_GET['file']));
	$filePath='assets/'.$fileName;
	if(!empty($fileName) && file_exists($filePath){
		//Define headers
		header("Cache-Control:public");
		header("Content-Description: File Transfer");
		header ("Content-Disposition: attachment; filename=$fileName");
		header("Content-Typess: application/zip");
		header("Content-Transfer-Encoding: binary");
	
		//read file

		readfile($filePath);
		exit;
	}
}
