<div class="surveyQuestions form">
<?php echo $this->Form->create('SurveyQuestion'); ?>
	<fieldset>
		<legend><?php echo __('Add Survey Question'); ?></legend>
	<?php
		echo $this->Form->input('text');
		echo $this->Form->input('survey_question_type_id');
		echo $this->Form->input('survey_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Survey Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Survey Question Types'), array('controller' => 'survey_question_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey Question Type'), array('controller' => 'survey_question_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys'), array('controller' => 'surveys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey'), array('controller' => 'surveys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Survey Question Options'), array('controller' => 'survey_question_options', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey Question Option'), array('controller' => 'survey_question_options', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Survey Responses'), array('controller' => 'survey_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey Response'), array('controller' => 'survey_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
