<?php
App::uses('AppController', 'Controller');

class ImagesController extends AppController {

	public $components = array('Paginator', 'ImageUpload');

	function beforeFilter() {
		parent::beforeFilter();
		
		$user_id = $this->Session->read('Auth.User.id');
		if(!empty($user_id)) {
			$this->Auth->allow('remove_from_cart', 'add_to_cart', 'image_results', 'download_cart_items', 'filter', 'cart_items', 'create_zip', 'instance_sender', 'cart_view');
		}
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->Paginator->paginate());
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	public function cart_view($hash = null) {
		$this->loadModel('Cart');
		
		$cart_info = $this->Cart->findByHash($hash);
		
		if(empty($cart_info)) {
			throw new NotFoundException(__('Invalid Entry'));
		}
		
		$image_ids = $cart_info['Cart']['items'];
		$image_ids = explode(",", $image_ids);
		
		$this->Image->recursive = 0;
		$this->set('images', $this->Paginator->paginate(array('Image.id' => $image_ids)));
		$this->set('hash', $hash);
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function add_to_cart($id = null) {
		if(!isset($_SESSION['image_cart'])) {
			$_SESSION['image_cart'] = array();
		}
		
		$_SESSION['image_cart'][$id] = $id;
		
		echo count($_SESSION['image_cart']);
		exit();
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function cart_items() {
		$this->layout = "ajax_with_scripts";
		$this->Image->unbindModelAll();
		$images_cart = $this->Image->find('all', array('conditions' => array('Image.id' => $_SESSION['image_cart'])));		
		$this->set("images", $images_cart);
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function download_cart_items($hash) {
		$this->layout = "ajax";
		$this->Image->unbindModelAll();
		
		$images_cart = $this->Image->find('all', array('conditions' => array('Image.id' => $_SESSION['image_cart'])));
		
		if(!empty($hash)) {
			$this->loadModel('Cart');		
			$cart_info = $this->Cart->findByHash($hash);
			$image_ids = $cart_info['Cart']['items'];
			$image_ids = explode(",", $image_ids);
			$images_cart = $this->Image->find('all', array('conditions' => array('Image.id' => $image_ids)));
		}
		
		$images = array();
		foreach($images_cart as $entry){
			$images[$entry['Image']['id']] = $entry['Image']['location'];
		}
		
		$zip_filename = time().".zip";
		
		$archive = $this->create_zip($images,$zip_filename);
		if($archive) {
				// place this code inside a php file and call it f.e. "download.php"
				$base_url = $_SERVER['HTTP_HOST'];
				$fullPath = WWW_ROOT.$zip_filename;

				if ($fd = fopen ($fullPath, "r")) {
					$fsize = filesize($fullPath);
					$path_parts = pathinfo($fullPath);
					$ext = strtolower($path_parts["extension"]);
					switch ($ext) {
						case "pdf":
						header("Content-type: application/pdf"); // add here more headers for diff. extensions
						header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
						break;
						default;
						header("Content-type: application/octet-stream");
						header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
					}
					header("Content-length: $fsize");
					header("Cache-control: private"); //use this to open files directly
					while(!feof($fd)) {
						$buffer = fread($fd, 2048);
						echo $buffer;
					}
				}
				fclose ($fd);
				unlink($fullPath);
			}
		
		exit();
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function remove_from_cart($id = null) {
		if(!isset($_SESSION['image_cart'])) {
			$_SESSION['image_cart'] = array();
		}
		
		unset($_SESSION['image_cart'][$id]);
		
		echo count($_SESSION['image_cart']);
		exit();
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function view($id = null) {
		
		if(!is_numeric($id)) {
			$image_info = $this->Image->findByHash($id);
			if(!empty($image_info['Image']['id'])) {
				$id = $image_info['Image']['id'];
			} else {
				$id = 0;
			}
		}
		
		if (!$this->Image->exists($id)) {
			throw new NotFoundException(__('Invalid image'));
		}
		
		$options = array('conditions' => array('Image.' . $this->Image->primaryKey => $id));
		$this->set('image', $this->Image->find('first', $options));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function add() {
		
		if ($this->request->is('post')) {			
			$this->request->data['Image']['hash'] = $this->generateRandomString(25);
			$this->request->data['Image']['location'] = $this->ImageUpload->uploadImage($this->request->data['Image']['location']);
			
			$this->Image->create();
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'));
			}
		}
		
		$brands = $this->Image->Brand->find('list');
		$users = $this->Image->User->find('list');
		$brandCategories = $this->Image->BrandCategory->find('list');
		$brands = $this->Image->Brand->find('list');
		$campaigns = $this->Image->Campaign->find('list');
		$categories = $this->Image->Category->find('list');
		$seasons = $this->Image->Season->find('list');
		$staffs = $this->Image->Staff->find('list');
		$weeks = $this->Image->Week->find('list');
		$this->set(compact('brands', 'users', 'brandCategories', 'brands', 'campaigns', 'categories', 'seasons', 'staffs', 'weeks'));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function filter($id = null) {		
		$this->loadModel('Filter');
		
		$user_id = $this->Session->read('Auth.User.id');
		$group_id = $this->Session->read('Auth.User.group_id');
		$this->loadModel('Filter');
		$this->Image->Brand->unBindModel(
			array(
				"hasAndBelongsToMany" => array("Image")
			)
		);
		
		if($group_id != 1) {
			$user_brands = $this->Image->query('SELECT brand_id FROM users_brands as UserBrand WHERE user_id = '.$user_id);
			$filtered_brand_id = array();
			foreach($user_brands as $key => $user_brand) {
				$filtered_brand_id[$key] = $user_brand['UserBrand']['brand_id'];
			}
		}
		
		if($group_id != 1) {
			$brands = $this->Image->Brand->find('all', array('fields' => array('Brand.id', 'Brand.brand'), 'conditions' => array('Brand.id' => $filtered_brand_id)));
		} else {
			$brands = $this->Image->Brand->find('all', array('fields' => array('Brand.id', 'Brand.brand')));
		}
		
		$this->Filter->unbindModelAll();
		$my_filters = $this->Filter->find('all', array('conditions' => array('Filter.user_id' => $user_id), 'order' => 'Filter.id DESC', 'limit' => 7));
		
		$users = $this->Image->User->find('list');
		$brandCategories = $this->Image->BrandCategory->find('list');
		$campaigns = $this->Image->Campaign->find('list');
		$categories = $this->Image->Category->find('list');
		$seasons = $this->Image->Season->find('list');
		$staffs = $this->Image->Staff->find('list');
		$weeks = $this->Image->Week->find('list');
		
		if(!empty($id)) {
			$this->loadModel('Filter');
			$filters = $this->Filter->findById($id);
			$this->set("filters", $filters);
		}
		
		$this->set(compact('brands', 'users', 'brandCategories', 'brands', 'campaigns', 'categories', 'seasons', 'staffs', 'weeks', 'my_filters'));
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function edit($id = null) {
		if (!$this->Image->exists($id)) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			if($this->request->data['Image']['location']['error'] == 0) {
				$this->request->data['Image']['location'] = $this->ImageUpload->uploadImage($this->request->data['Image']['location']);
			} else {
				$this->request->data['Image']['location'] = $this->request->data['Image']['original_location'];
			}
			
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Image.' . $this->Image->primaryKey => $id));
			$this->request->data = $this->Image->find('first', $options);
		}
		
		$brands = $this->Image->Brand->find('list');
		$users = $this->Image->User->find('list');
		$brandCategories = $this->Image->BrandCategory->find('list');
		$brands = $this->Image->Brand->find('list');
		$campaigns = $this->Image->Campaign->find('list');
		$categories = $this->Image->Category->find('list');
		$seasons = $this->Image->Season->find('list');
		$staffs = $this->Image->Staff->find('list');
		$weeks = $this->Image->Week->find('list');
		$this->set(compact('brands', 'users', 'brandCategories', 'brands', 'campaigns', 'categories', 'seasons', 'staffs', 'weeks'));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function delete($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Image->delete()) {
			$this->Session->setFlash(__('The image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function image_results() {
		$this->layout = "ajax";
		
		$user_id = $this->Session->read('Auth.User.id');
		$group_id = $this->Session->read('Auth.User.group_id');
		
		if($group_id != 1) {
			$user_brands = $this->Image->query('SELECT brand_id FROM users_brands as UserBrand WHERE user_id = '.$user_id);
			$filtered_brand_id = array();
			foreach($user_brands as $key => $user_brand) {
				$filtered_brand_id[$key] = $user_brand['UserBrand']['brand_id'];
			}
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$post_data = $this->request->data;
			$condition = array();
			
			foreach($post_data as $module => $selected_options) {	
				
				switch($module) {
					case 'Brand':
						if(!empty($selected_options['id'])) {
							$condition['Brand.id'] = "Brand.id IN (".implode(",", $selected_options['id']).")";
						}
						break;
						
					case 'BrandCategory':
						if(!empty($selected_options['id'])) {
							$condition['BrandCategory.id'] = "BrandCategory.id IN (".implode(",", $selected_options['id']).")";
						}
						break;
						
					case 'Campaign':						
						if(!empty($selected_options['id'])) {
							$condition['Campaign.id']  = "Campaign.id IN (".implode(",", $selected_options['id']).")";
						}
						
						break;
						
					case 'Category':
						if(!empty($selected_options['id'])) {
							$condition['Category.id'] = "Category.id IN (".implode(",", $selected_options['id']).")";
						}
						break;
						
					case 'Season':
						if(!empty($selected_options['id'])) {
							$condition['Season.id'] = "Season.id IN (".implode(",", $selected_options['id']).")";
						}
						break;
						
					case 'Staff':
						if(!empty($selected_options['id'])) {
							$condition['Staff.id'] = "Staff.id IN (".implode(",", $selected_options['id']).")";
						}
						break;
						
					case 'Week':
						if(!empty($selected_options['id'])) {
							$condition['Week.id']  = "Week.id IN (".implode(",", $selected_options['id']).")";
						}
						break;
				}
			}
			
			$condition_string = "";
			
			if(!empty($condition)) {
				
				if($group_id != 1) {
					if(empty($condition['Brand.id'])) {
						$condition['Brand.id'] = "Brand.id IN (".implode(",", $filtered_brand_id).")";
					}
				}
				
				$condition_string = implode(" AND ", $condition);
				
				$image_query = "
					SELECT DISTINCT Image.id FROM images as Image LEFT JOIN images_brands as ImageBrand
					ON Image.id = ImageBrand.image_id LEFT JOIN brands as Brand
					ON ImageBrand.brand_id = Brand.id
					
					LEFT JOIN images_campaigns as ImageCampaign
					ON Image.id = ImageCampaign.image_id
					LEFT JOIN campaigns as Campaign
					ON ImageCampaign.campaign_id = Campaign.id
					
					LEFT JOIN images_categories as ImageCategory
					ON Image.id = ImageCategory.image_id
					LEFT JOIN categories as Category
					ON ImageCategory.category_id = Category.id
					
					LEFT JOIN images_seasons as ImageSeason
					ON Image.id = ImageSeason.image_id
					LEFT JOIN seasons as Season
					ON ImageSeason.season_id = Season.id
					
					LEFT JOIN images_staffs as ImageStaff
					ON Image.id = ImageStaff.image_id
					LEFT JOIN staffs as Staff
					ON ImageStaff.staff_id = Staff.id
					
					LEFT JOIN images_weeks as ImageWeek
					ON Image.id = ImageWeek.image_id
					LEFT JOIN weeks as Week
					ON ImageWeek.week_id = Week.id
					
					WHERE ".$condition_string." AND Image.status = 1
				";
				
				$images = $this->Image->query($image_query);
				
				$image_ids = array();
				foreach($images as $key => $image) {
					$image_ids[$key] = $image['Image']['id'];
				}
				
				$this->Paginator->settings = array(
					'limit' => 10
				);
				
				$images = $this->Paginator->paginate(array('Image.id' => $image_ids));
			} else {
				$images = array();
			}
			
			$this->set("images", $images);
		}
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	function instance_sender($id = null) {		
		$emails = array();
		
		$recipients = explode(",", $_POST['recipients']);
		$this->Image->unbindModelAll();
		$image_info = $this->Image->findById($_POST['image_id']);
		
		$subject = 'Image Reference Share';
		
		$headers = "From: " . strip_tags($this->Session->read('Auth.User.email')) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($this->Session->read('Auth.User.email')) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		foreach($recipients as $key => $recipient) {
			$to = trim($recipient);
			$mail_body = "You've been shared with an image reference. Click <a href=http://".$_SERVER['SERVER_NAME']."/images/view/".$image_info['Image']['hash'].">here</a> to view.";
			
			$message = '<html><body>';
			$message .= $mail_body;
			$message .= '</body></html>';
			
			mail($to, $subject, $message, $headers);
		}
		
		exit();
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	/* creates a compressed zip file */
	function create_zip($files = array(),$destination = '',$overwrite = false) {
		
		//if the zip file already exists and overwrite is false, return false
		if(file_exists($destination) && !$overwrite) { return false; }
		
		//vars
		$valid_files = array();
		//if files were passed in...
		if(is_array($files)) {
			//cycle through each file
			foreach($files as $file) {
				//make sure the file exists
				if(file_exists(WWW_ROOT."img/uploaded/".$file)) {
					$valid_files[] = $file;
				}
			}
		}
		
		//if we have good files...
		if(count($valid_files)) {
			//create the archive
			$zip = new ZipArchive();
			if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
				return false;
			}
			//add the files
			foreach($valid_files as $file) {
				$zip->addFile(WWW_ROOT."img/uploaded/".$file,$file);
			}
			//debug
			//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
			
			//close the zip -- done!
			$zip->close();
			
			//check to make sure the file exists
			return file_exists($destination);
		} else {
			return false;
		}
	}
}