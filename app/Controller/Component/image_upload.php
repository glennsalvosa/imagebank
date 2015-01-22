<?php

class ImageUploadComponent extends Object {
	
    function uploadImage($image, $folder) {
      	$name = $image['name'];
		$type = $image['type'];
		$tmp_name = $image['tmp_name'];
		$error = $image['error'];
		$size = $image['size'];
		$ext = explode('.', $name);
		if ($name != ''){
			$namefinal = time().'_'.$name;
			move_uploaded_file($tmp_name, WWW_ROOT.'img/'.$folder.'/'.$namefinal)or die('Error');
		}
		return $namefinal;
    }

	
	function deleteImage($filename, $folder){
		if(file_exists(WWW_ROOT.'img/'.$folder.'/'.$filename)) {
			unlink(WWW_ROOT.'img/'.$folder.'/'.$filename);
		}
	}
}
?>
