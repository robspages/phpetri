<div class="surveys view">
<h2><?php echo __('Survey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['modified_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Survey'), array('action' => 'edit', $survey['Survey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Survey'), array('action' => 'delete', $survey['Survey']['id']), null, __('Are you sure you want to delete # %s?', $survey['Survey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey'), array('action' => 'add')); ?> </li>
	</ul>
</div>
