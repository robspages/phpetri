<?php
App::uses('Survey', 'Surveysa.Model');

/**
 * Survey Test Case
 *
 */
class SurveyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.surveysa.survey',
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
		$this->Survey = ClassRegistry::init('Surveysa.Survey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Survey);

		parent::tearDown();
	}

}
