<?php
App::uses('BrandCategory', 'Model');

/**
 * BrandCategory Test Case
 *
 */
class BrandCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.brand_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BrandCategory = ClassRegistry::init('BrandCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BrandCategory);

		parent::tearDown();
	}

}
