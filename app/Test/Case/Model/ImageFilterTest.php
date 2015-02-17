<?php
App::uses('ImageFilter', 'Model');

/**
 * ImageFilter Test Case
 *
 */
class ImageFilterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.image_filter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImageFilter = ClassRegistry::init('ImageFilter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImageFilter);

		parent::tearDown();
	}

}
