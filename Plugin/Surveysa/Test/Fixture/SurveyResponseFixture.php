<?php
/**
 * SurveyResponseFixture
 *
 */
class SurveyResponseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'respondent_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 140, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'survey_question_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'survey_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'survey_question_option_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'respondent_id' => 'Lorem ipsum dolor sit amet',
			'survey_question_id' => 1,
			'survey_id' => 1,
			'survey_question_option_id' => 1,
			'comment' => 'Lorem ipsum dolor sit amet'
		),
	);

}
