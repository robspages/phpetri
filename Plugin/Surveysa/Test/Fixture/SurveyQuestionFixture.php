<?php
/**
 * SurveyQuestionFixture
 *
 */
class SurveyQuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'text' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'survey_question_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'survey_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'survey_question_type_id' => 1,
			'survey_id' => 1
		),
	);

}
