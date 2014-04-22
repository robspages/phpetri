<?php
/**
 * SurveyFixture
 *
 */
class SurveyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'survey';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified_by' => array('type' => 'integer', 'null' => false, 'default' => null),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'start_date' => '2014-04-22 11:23:55',
			'end_date' => '2014-04-22 11:23:55',
			'created_by' => 1,
			'created_date' => 1398180235,
			'modified_by' => 1,
			'modified_date' => '2014-04-22 11:23:55'
		),
	);

}
