<?php
App::uses('AppController', 'Controller');
/**
 * BrandCategories Controller
 *
 * @property BrandCategory $BrandCategory
 * @property PaginatorComponent $Paginator
 */
class BrandCategoriesController extends AppController {

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
		$this->BrandCategory->recursive = 0;
		$this->set('brandCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BrandCategory->exists($id)) {
			throw new NotFoundException(__('Invalid brand category'));
		}
		$options = array('conditions' => array('BrandCategory.' . $this->BrandCategory->primaryKey => $id));
		$this->set('brandCategory', $this->BrandCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BrandCategory->create();
			if ($this->BrandCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The brand category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand category could not be saved. Please, try again.'));
			}
		}
		$brands = $this->BrandCategory->Brand->find('list');
		$this->set(compact('brands'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BrandCategory->exists($id)) {
			throw new NotFoundException(__('Invalid brand category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BrandCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The brand category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BrandCategory.' . $this->BrandCategory->primaryKey => $id));
			$this->request->data = $this->BrandCategory->find('first', $options);
		}
		$brands = $this->BrandCategory->Brand->find('list');
		$this->set(compact('brands'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BrandCategory->id = $id;
		if (!$this->BrandCategory->exists()) {
			throw new NotFoundException(__('Invalid brand category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BrandCategory->delete()) {
			$this->Session->setFlash(__('The brand category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The brand category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function get_checklist() {
		$this->layout = "ajax";
		
		$selected_brands = explode(",", $_POST['selected_brands_holder']);
		$brand_categories = $this->BrandCategory->find('list', array('conditions' => array('brand_id' => $selected_brands, 'status' => 1)));
		$this->set("brand_categories", $brand_categories);
	}
}
