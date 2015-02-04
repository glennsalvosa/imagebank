<?php
App::uses('AppController', 'Controller');
/**
 * Weeks Controller
 *
 * @property Week $Week
 * @property PaginatorComponent $Paginator
 */
class WeeksController extends AppController {

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
		$this->Week->recursive = 0;
		$this->set('weeks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Week->exists($id)) {
			throw new NotFoundException(__('Invalid week'));
		}
		$options = array('conditions' => array('Week.' . $this->Week->primaryKey => $id));
		$this->set('week', $this->Week->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Week->create();
			if ($this->Week->save($this->request->data)) {
				if(isset($_GET['mode'])) {
					$week = $this->request->data['Week']['period'];
					$week_id = $this->Week->id;
					echo "<option selected=selected value=".$week_id.">".$week."</option>";
					exit();
				} else {
					$this->Session->setFlash(__('The week has been saved.'));
					return $this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The week could not be saved. Please, try again.'));
			}
		}
		$images = $this->Week->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Week->exists($id)) {
			throw new NotFoundException(__('Invalid week'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Week->save($this->request->data)) {
				$this->Session->setFlash(__('The week has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The week could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Week.' . $this->Week->primaryKey => $id));
			$this->request->data = $this->Week->find('first', $options);
		}
		$images = $this->Week->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Week->id = $id;
		if (!$this->Week->exists()) {
			throw new NotFoundException(__('Invalid week'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Week->delete()) {
			$this->Session->setFlash(__('The week has been deleted.'));
		} else {
			$this->Session->setFlash(__('The week could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
