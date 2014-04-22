<?php
/**
 * SurveyQuestionOptionFixture
 *
 */
class SurveyQuestionOptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'text' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 140, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'survey_question_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'value' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'text' => 'Lorem ipsum dolor sit amet',
			'survey_question_id' => 1,
			'value' => 'Lorem ipsum dolor sit amet'
		),
	);

}
