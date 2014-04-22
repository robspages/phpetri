<?php
App::uses('SurveyResponse', 'Surveysa.Model');

/**
 * SurveyResponse Test Case
 *
 */
class SurveyResponseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.surveysa.survey_response',
		'plugin.surveysa.respondent',
		'plugin.surveysa.survey_question',
		'plugin.surveysa.survey',
		'plugin.surveysa.survey_question_option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurveyResponse = ClassRegistry::init('Surveysa.SurveyResponse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurveyResponse);

		parent::tearDown();
	}

}
