<?php
/**
 * ImageFilterFixture
 *
 */
class ImageFilterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'brand' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'brand_category' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'campaign' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'category' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'season' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'staff' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'week' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 255, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'brand' => 1,
			'brand_category' => 1,
			'campaign' => 1,
			'category' => 1,
			'season' => 1,
			'staff' => 1,
			'week' => 1,
			'created' => '2015-02-17 01:05:04',
			'modified' => '2015-02-17 01:05:04',
			'status' => 1
		),
	);

}
