<?php
App::uses('SurveyQuestionOption', 'Surveysa.Model');

/**
 * SurveyQuestionOption Test Case
 *
 */
class SurveyQuestionOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.surveysa.survey_question_option',
		'plugin.surveysa.survey_question',
		'plugin.surveysa.survey_response'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurveyQuestionOption = ClassRegistry::init('Surveysa.SurveyQuestionOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurveyQuestionOption);

		parent::tearDown();
	}

}
