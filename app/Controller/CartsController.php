<?php
App::uses('AppController', 'Controller');

class CartsController extends AppController {

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public $components = array('Paginator');
	
	function beforeFilter() {
		parent::beforeFilter();
		
		$user_id = $this->Session->read('Auth.User.id');
		if(!empty($user_id)) {
			$this->Auth->allow('cart_sender');
		}
	}
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function index() {
		$this->Cart->recursive = 0;
		$this->set('carts', $this->Paginator->paginate());
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function view($id = null) {
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
		$this->set('cart', $this->Cart->find('first', $options));
	}

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Cart->create();
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		}
		$users = $this->Cart->User->find('list');
		$this->set(compact('users'));
	}

	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function edit($id = null) {
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
			$this->request->data = $this->Cart->find('first', $options);
		}
		$users = $this->Cart->User->find('list');
		$this->set(compact('users'));
	}

	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function delete($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cart->delete()) {
			$this->Session->setFlash(__('The cart has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cart could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	/* ------------------------------------------------------------------------------------ FUNCTION SEPARATOR --------------------------------------------------------------------------------------- */
	
	public function cart_sender() {
		$image_ids = implode(",", $_SESSION['image_cart']);
		$hash_value = "";
		
		if(!empty($image_ids)) {
			$hash = $this->generateRandomString(25);
			
			$tosave = array();
			$tosave['Cart']['hash'] = $hash;
			$tosave['Cart']['items'] = $image_ids;
			$tosave['Cart']['user_id'] = $this->Session->read('Auth.User.id');
			
			$this->Cart->create();
			$this->Cart->save($tosave);
			
			$cart_id = $this->Cart->id;
			$cart_info = $this->Cart->findById($cart_id);
			$hash_value = $cart_info['Cart']['hash'];
		}
		
		if(!empty($hash_value)) {
			$recipients = explode(",", $_POST['recipients']);
			$subject = 'Image Reference Share';
			
			$headers = "From: " . strip_tags($this->Session->read('Auth.User.email')) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($this->Session->read('Auth.User.email')) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			foreach($recipients as $key => $recipient) {
				$to = trim($recipient);
				$mail_body = "You've been shared with an image reference. Click <a href=http://".$_SERVER['SERVER_NAME']."/images/cart_view/".$hash_value.">here</a> to view.";
				
				$message = '<html><body>';
				$message .= $mail_body;
				$message .= '</body></html>';
				
				mail($to, $subject, $message, $headers);
			}
		}
		
		exit();
	}
}
