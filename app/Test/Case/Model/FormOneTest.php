<?php
App::uses('FormOne', 'Model');

/**
 * FormOne Test Case
 *
 */
class FormOneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.form_one'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormOne = ClassRegistry::init('FormOne');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormOne);

		parent::tearDown();
	}

}
