<?php
/**
 * DownloadFixture
 *
 */
class DownloadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'image_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'id' => '',
			'image_id' => '',
			'user_id' => '',
			'created' => '2014-12-23 08:33:54',
			'modified' => '2014-12-23 08:33:54',
			'status' => 1
		),
	);

}
