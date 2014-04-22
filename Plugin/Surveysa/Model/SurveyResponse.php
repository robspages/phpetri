<?php
App::uses('SurveysaAppModel', 'Surveysa.Model');
/**
 * SurveyResponse Model
 *
 * @property Respondent $Respondent
 * @property SurveyQuestion $SurveyQuestion
 * @property Survey $Survey
 * @property SurveyQuestionOption $SurveyQuestionOption
 */
class SurveyResponse extends SurveysaAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'respondent_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'survey_question_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'survey_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'survey_question_option_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Respondent' => array(
			'className' => 'Respondent',
			'foreignKey' => 'respondent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SurveyQuestion' => array(
			'className' => 'SurveyQuestion',
			'foreignKey' => 'survey_question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Survey' => array(
			'className' => 'Survey',
			'foreignKey' => 'survey_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SurveyQuestionOption' => array(
			'className' => 'SurveyQuestionOption',
			'foreignKey' => 'survey_question_option_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
