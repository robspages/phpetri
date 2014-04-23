<div class="surveyQuestions index">
	<h2><?php echo __('Survey Questions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('survey_question_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('survey_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($surveyQuestions as $surveyQuestion): ?>
	<tr>
		<td><?php echo h($surveyQuestion['SurveyQuestion']['id']); ?>&nbsp;</td>
		<td><?php echo h($surveyQuestion['SurveyQuestion']['text']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($surveyQuestion['SurveyQuestionType']['name'], array('controller' => 'survey_question_types', 'action' => 'view', $surveyQuestion['SurveyQuestionType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($surveyQuestion['Survey']['name'], array('controller' => 'surveys', 'action' => 'view', $surveyQuestion['Survey']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $surveyQuestion['SurveyQuestion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $surveyQuestion['SurveyQuestion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $surveyQuestion['SurveyQuestion']['id']), null, __('Are you sure you want to delete # %s?', $surveyQuestion['SurveyQuestion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Survey Question'), array('action' => 'add')); ?></li>
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
