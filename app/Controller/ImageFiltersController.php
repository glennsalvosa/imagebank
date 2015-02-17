<?php
App::uses('AppController', 'Controller');
/**
 * ImageFilters Controller
 *
 * @property ImageFilter $ImageFilter
 * @property PaginatorComponent $Paginator
 */
class ImageFiltersController extends AppController {

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */

	public $components = array('Paginator');

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function index() {
		$this->ImageFilter->recursive = 0;
		$this->set('imageFilters', $this->Paginator->paginate());
	}

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function view($id = null) {
		if (!$this->ImageFilter->exists($id)) {
			throw new NotFoundException(__('Invalid image filter'));
		}
		$options = array('conditions' => array('ImageFilter.' . $this->ImageFilter->primaryKey => $id));
		$this->set('imageFilter', $this->ImageFilter->find('first', $options));
	}

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ImageFilter->create();
			if ($this->ImageFilter->save($this->request->data)) {
				$this->Session->setFlash(__('The image filter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image filter could not be saved. Please, try again.'));
			}
		}
	}

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function edit($id = null) {
		if (!$this->ImageFilter->exists($id)) {
			throw new NotFoundException(__('Invalid image filter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ImageFilter->save($this->request->data)) {
				$this->Session->setFlash(__('The image filter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image filter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImageFilter.' . $this->ImageFilter->primaryKey => $id));
			$this->request->data = $this->ImageFilter->find('first', $options);
		}
	}

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function delete($id = null) {
		$this->ImageFilter->id = $id;
		if (!$this->ImageFilter->exists()) {
			throw new NotFoundException(__('Invalid image filter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ImageFilter->delete()) {
			$this->Session->setFlash(__('The image filter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The image filter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}