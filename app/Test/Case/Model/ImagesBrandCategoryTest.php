<?php
App::uses('ImagesBrandCategory', 'Model');

/**
 * ImagesBrandCategory Test Case
 *
 */
class ImagesBrandCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.images_brand_category',
		'app.image',
		'app.brand',
		'app.brand_category',
		'app.images_brand',
		'app.user',
		'app.download',
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
		$this->ImagesBrandCategory = ClassRegistry::init('ImagesBrandCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImagesBrandCategory);

		parent::tearDown();
	}

}
