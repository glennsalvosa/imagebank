<?php
App::uses('Component', 'Controller');
class ImageUploadComponent extends Component {
	
    function uploadImage($image) {
      	$name = $image['name'];
		$type = $image['type'];
		$tmp_name = $image['tmp_name'];
		$error = $image['error'];
		$size = $image['size'];
		$ext = explode('.', $name);
		if ($name != ''){
			$namefinal = time().'_'.str_replace(" ", "_", strtolower($name));
			if(move_uploaded_file($tmp_name, WWW_ROOT.'img/uploaded/'.$namefinal)) {
				return $namefinal;
			} else {
				return false;
			}
		} else {
			return false;
		}
    }

	
	function deleteImage($filename, $folder){
		if(file_exists(WWW_ROOT.'img/'.$folder.'/'.$filename)) {
			unlink(WWW_ROOT.'img/'.$folder.'/'.$filename);
		}
	}
}
?>
