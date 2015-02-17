<?php
App::uses('AppController', 'Controller');

class ImagesController extends AppController {

	public $components = array('Paginator', 'ImageUpload');


	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->Paginator->paginate());
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function view($id = null) {
		if (!$this->Image->exists($id)) {
			throw new NotFoundException(__('Invalid image'));
		}
		$options = array('conditions' => array('Image.' . $this->Image->primaryKey => $id));
		$this->set('image', $this->Image->find('first', $options));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function add() {
		
		if ($this->request->is('post')) {			
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
		$this->Image->Brand->unBindModel(
			array(
				"hasAndBelongsToMany" => array("Image")
			)
		);
		
		$brands = $this->Image->Brand->find('all', array('fields' => array('Brand.id', 'Brand.brand')));
		$users = $this->Image->User->find('list');
		$brandCategories = $this->Image->BrandCategory->find('list');
		$campaigns = $this->Image->Campaign->find('list');
		$categories = $this->Image->Category->find('list');
		$seasons = $this->Image->Season->find('list');
		$staffs = $this->Image->Staff->find('list');
		$weeks = $this->Image->Week->find('list');
		
		$this->set(compact('brands', 'users', 'brandCategories', 'brands', 'campaigns', 'categories', 'seasons', 'staffs', 'weeks'));	
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
		if ($this->request->is(array('post', 'put'))) {
			$post_data = $this->request->data;
			$condition = array();
			foreach($post_data as $module => $selected_options) {	
				
				switch($module) {
					case 'Brand':
						if(!empty($selected_options['id'])) {
							$condition['Brand.id'] = implode(",", $selected_options['id']);
						}
						break;
						
					case 'BrandCategory':
						if(!empty($selected_options['id'])) {
							$condition['Brand.id'] = "Brand.id IN (".implode(",", $selected_options['id']).")";
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
				
				$images = $this->Paginator->paginate(array('Image.id' => $image_ids));
			} else {
				$images = array();
			}
			
			$this->set("images", $images);
		}
	}
}