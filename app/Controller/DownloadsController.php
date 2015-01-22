<?php
App::uses('AppController', 'Controller');
/**
 * Downloads Controller
 *
 * @property Download $Download
 * @property PaginatorComponent $Paginator
 */
class DownloadsController extends AppController {

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
		$this->Download->recursive = 0;
		$this->set('downloads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Download->exists($id)) {
			throw new NotFoundException(__('Invalid download'));
		}
		$options = array('conditions' => array('Download.' . $this->Download->primaryKey => $id));
		$this->set('download', $this->Download->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Download->create();
			if ($this->Download->save($this->request->data)) {
				$this->Session->setFlash(__('The download has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The download could not be saved. Please, try again.'));
			}
		}
		$images = $this->Download->Image->find('list');
		$users = $this->Download->User->find('list');
		$this->set(compact('images', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Download->exists($id)) {
			throw new NotFoundException(__('Invalid download'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Download->save($this->request->data)) {
				$this->Session->setFlash(__('The download has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The download could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Download.' . $this->Download->primaryKey => $id));
			$this->request->data = $this->Download->find('first', $options);
		}
		$images = $this->Download->Image->find('list');
		$users = $this->Download->User->find('list');
		$this->set(compact('images', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Download->id = $id;
		if (!$this->Download->exists()) {
			throw new NotFoundException(__('Invalid download'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Download->delete()) {
			$this->Session->setFlash(__('The download has been deleted.'));
		} else {
			$this->Session->setFlash(__('The download could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
