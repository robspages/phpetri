<?php
App::uses('SurveyQuestionType', 'Surveysa.Model');

/**
 * SurveyQuestionType Test Case
 *
 */
class SurveyQuestionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.surveysa.survey_question_type',
		'plugin.surveysa.survey_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurveyQuestionType = ClassRegistry::init('Surveysa.SurveyQuestionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurveyQuestionType);

		parent::tearDown();
	}

}
