<div class="seasons form">
<?php echo $this->Form->create('Season'); ?>
	<fieldset>
		<legend><?php echo __('Add Season'); ?></legend>
	<?php
		echo $this->Form->input('season');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seasons'), array('action' => 'index')); ?></li>
	</ul>
</div>
