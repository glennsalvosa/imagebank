<?php
App::uses('AppController', 'Controller');
/**
 * Images Controller
 *
 * @property Image $Image
 * @property PaginatorComponent $Paginator
 */
class ImagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'ImageUpload');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Image->exists($id)) {
			throw new NotFoundException(__('Invalid image'));
		}
		$options = array('conditions' => array('Image.' . $this->Image->primaryKey => $id));
		$this->set('image', $this->Image->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
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

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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
}
