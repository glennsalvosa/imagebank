<?php
App::uses('AppController', 'Controller');
/**
 * Brands Controller
 *
 * @property Brand $Brand
 * @property PaginatorComponent $Paginator
 */
class BrandsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Brand->recursive = 0;
		$this->set('brands', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$options = array('conditions' => array('Brand.' . $this->Brand->primaryKey => $id));
		$this->set('brand', $this->Brand->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$this->Brand->create();
			if ($this->Brand->save($this->request->data)) {
				$brand_id = $this->Brand->id;
				
				foreach($this->request->data['BrandCategory']['category'] as $category) {
					$to_create_brand_category = array();
					$to_create_brand_category['BrandCategory']['category'] = $category;
					$to_create_brand_category['BrandCategory']['brand_id'] = $brand_id;
					
					$this->Brand->BrandCategory->create();
					$this->Brand->BrandCategory->save($to_create_brand_category);
				}
				
				if(isset($_GET['mode'])) {
					$brand = $this->request->data['Brand']['brand'];
					echo "<option selected=selected value=".$brand_id.">".$brand."</option>";
					exit();
				} else {
					$this->Session->setFlash(__('The brand has been saved.'));
					return $this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$original_brand_categories = $this->Brand->BrandCategory->find('list', array('conditions' => array('BrandCategory.brand_id' => $id, 'BrandCategory.status' => 1), 'fields' => array('id', 'id')));
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			
			$this->var_debug($original_brand_categories);
			
			$submitted_category_ids = array();
			foreach($this->request->data['BrandCategory'] as $brand_category) {
				if(isset($brand_category['id'])) {
					$submitted_category_ids[$brand_category['id']] = $brand_category['id'];
				}
			}
			
			$tobe_deleted = array_diff($original_brand_categories, $submitted_category_ids);
			
			if ($this->Brand->save($this->request->data)) {		
				
				foreach($this->request->data['BrandCategory'] as $category) {
					$to_create_brand_category = array();
					$to_create_brand_category['BrandCategory']['category'] = $category['category'];
					$to_create_brand_category['BrandCategory']['brand_id'] = $this->Brand->id;
					
					if(!isset($category['id'])) {
						$this->Brand->BrandCategory->create();
					} else {
						$to_create_brand_category['BrandCategory']['id'] = $category['id'];
					}
					
					$this->Brand->BrandCategory->save($to_create_brand_category);
				}
				
				if(!empty($tobe_deleted)) {
					foreach($tobe_deleted as $delete_id) {
						$to_delete = array();
						$to_delete['BrandCategory']['id'] = $delete_id;
						$to_delete['BrandCategory']['status'] = 0;
						
						$this->Brand->BrandCategory->save($to_delete);
					}					
				}
				
				$this->Session->setFlash(__('The brand has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Brand.' . $this->Brand->primaryKey => $id));
			$this->request->data = $this->Brand->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Brand->id = $id;
		if (!$this->Brand->exists()) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Brand->delete()) {
			$this->Session->setFlash(__('The brand has been deleted.'));
		} else {
			$this->Session->setFlash(__('The brand could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
