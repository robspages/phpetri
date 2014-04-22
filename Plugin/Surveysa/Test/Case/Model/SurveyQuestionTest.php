<?php
App::uses('SurveyQuestion', 'Surveysa.Model');

/**
 * SurveyQuestion Test Case
 *
 */
class SurveyQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.surveysa.survey_question',
		'plugin.surveysa.survey_question_type',
		'plugin.surveysa.survey',
		'plugin.surveysa.survey_question_option',
		'plugin.surveysa.survey_response'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurveyQuestion = ClassRegistry::init('Surveysa.SurveyQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurveyQuestion);

		parent::tearDown();
	}

}
