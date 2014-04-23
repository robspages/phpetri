<div class="surveys form">
<?php echo $this->Form->create('Survey'); ?>
	<fieldset>
		<legend><?php echo __('Add Survey'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('created_by');
		echo $this->Form->input('created_date');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('modified_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Surveys'), array('action' => 'index')); ?></li>
	</ul>
</div>
