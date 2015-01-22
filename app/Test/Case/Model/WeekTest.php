<?php
App::uses('Week', 'Model');

/**
 * Week Test Case
 *
 */
class WeekTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.week',
		'app.image',
		'app.brand',
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
		'app.images_week'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Week = ClassRegistry::init('Week');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Week);

		parent::tearDown();
	}

}
