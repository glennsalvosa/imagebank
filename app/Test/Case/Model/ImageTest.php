<?php
App::uses('Image', 'Model');

/**
 * Image Test Case
 *
 */
class ImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.image',
		'app.user',
		'app.download',
		'app.brand',
		'app.images_brand',
		'app.campaign',
		'app.images_campaign',
		'app.category',
		'app.images_category',
		'app.season',
		'app.images_season',
		'app.staff',
		'app.company',
		'app.images_staff',
		'app.week',
		'app.images_week'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Image = ClassRegistry::init('Image');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Image);

		parent::tearDown();
	}

}
