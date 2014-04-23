<div class="surveyQuestions view">
<h2><?php echo __('Survey Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($surveyQuestion['SurveyQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($surveyQuestion['SurveyQuestion']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Survey Question Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($surveyQuestion['SurveyQuestionType']['name'], array('controller' => 'survey_question_types', 'action' => 'view', $surveyQuestion['SurveyQuestionType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Survey'); ?></dt>
		<dd>
			<?php echo $this->Html->link($surveyQuestion['Survey']['name'], array('controller' => 'surveys', 'action' => 'view', $surveyQuestion['Survey']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Survey Question'), array('action' => 'edit', $surveyQuestion['SurveyQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Survey Question'), array('action' => 'delete', $surveyQuestion['SurveyQuestion']['id']), null, __('Are you sure you want to delete # %s?', $surveyQuestion['SurveyQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Survey Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey Question'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Survey Question Options'); ?></h3>
	<?php if (!empty($surveyQuestion['SurveyQuestionOption'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Survey Question Id'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($surveyQuestion['SurveyQuestionOption'] as $surveyQuestionOption): ?>
		<tr>
			<td><?php echo $surveyQuestionOption['id']; ?></td>
			<td><?php echo $surveyQuestionOption['text']; ?></td>
			<td><?php echo $surveyQuestionOption['survey_question_id']; ?></td>
			<td><?php echo $surveyQuestionOption['value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'survey_question_options', 'action' => 'view', $surveyQuestionOption['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'survey_question_options', 'action' => 'edit', $surveyQuestionOption['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'survey_question_options', 'action' => 'delete', $surveyQuestionOption['id']), null, __('Are you sure you want to delete # %s?', $surveyQuestionOption['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Survey Question Option'), array('controller' => 'survey_question_options', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Survey Responses'); ?></h3>
	<?php if (!empty($surveyQuestion['SurveyResponse'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Respondent Id'); ?></th>
		<th><?php echo __('Survey Question Id'); ?></th>
		<th><?php echo __('Survey Id'); ?></th>
		<th><?php echo __('Survey Question Option Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($surveyQuestion['SurveyResponse'] as $surveyResponse): ?>
		<tr>
			<td><?php echo $surveyResponse['id']; ?></td>
			<td><?php echo $surveyResponse['respondent_id']; ?></td>
			<td><?php echo $surveyResponse['survey_question_id']; ?></td>
			<td><?php echo $surveyResponse['survey_id']; ?></td>
			<td><?php echo $surveyResponse['survey_question_option_id']; ?></td>
			<td><?php echo $surveyResponse['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'survey_responses', 'action' => 'view', $surveyResponse['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'survey_responses', 'action' => 'edit', $surveyResponse['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'survey_responses', 'action' => 'delete', $surveyResponse['id']), null, __('Are you sure you want to delete # %s?', $surveyResponse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Survey Response'), array('controller' => 'survey_responses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
