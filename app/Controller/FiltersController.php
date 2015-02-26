<?php
App::uses('AppController', 'Controller');

class FiltersController extends AppController {


	public $components = array('Paginator');
	
	function beforeFilter() {
		parent::beforeFilter();
		
		$user_id = $this->Session->read('Auth.User.id');
		if(!empty($user_id)) {
			$this->Auth->allow('ajax_edit', 'ajax_add');
		}
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function index() {
		$this->Filter->recursive = 0;
		$this->set('filters', $this->Paginator->paginate());
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function view($id = null) {
		if (!$this->Filter->exists($id)) {
			throw new NotFoundException(__('Invalid filter'));
		}
		$options = array('conditions' => array('Filter.' . $this->Filter->primaryKey => $id));
		$this->set('filter', $this->Filter->find('first', $options));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Filter->create();
			if ($this->Filter->save($this->request->data)) {
				$this->Session->setFlash(__('The filter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filter could not be saved. Please, try again.'));
			}
		}
		$users = $this->Filter->User->find('list');
		$this->set(compact('users'));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function edit($id = null) {
		if (!$this->Filter->exists($id)) {
			throw new NotFoundException(__('Invalid filter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Filter->save($this->request->data)) {
				$this->Session->setFlash(__('The filter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Filter.' . $this->Filter->primaryKey => $id));
			$this->request->data = $this->Filter->find('first', $options);
		}
		$users = $this->Filter->User->find('list');
		$this->set(compact('users'));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function delete($id = null) {
		$this->Filter->id = $id;
		if (!$this->Filter->exists()) {
			throw new NotFoundException(__('Invalid filter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Filter->delete()) {
			$this->Session->setFlash(__('The filter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The filter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
		
	public function ajax_edit() {
		if ($this->request->is('post')) {
			if ($this->Filter->save($this->request->data)) {
				echo "1";
			} else {
				echo "0";
			}
		}
		exit();
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function ajax_add() {
		$user_id = $this->Session->read('Auth.User.id');
		if ($this->request->is('post')) {
			$this->Filter->create();
			if ($this->Filter->save($this->request->data)) {
				$my_filters = $this->Filter->find('all', array('conditions' => array('Filter.user_id' => $user_id), 'order' => 'Filter.id DESC', 'limit' => 7));
				
				echo "<input type=hidden id=created_filter_id value=".$this->Filter->id.">";
				foreach($my_filters as $my_filter) {
					echo '<li><a href="/images/filter/'.$my_filter['Filter']['id'].'">'.$my_filter['Filter']['filter_name'].'</a></li>';
				}
			} else {
				echo "0";
			}
		}
		exit();
	}
}