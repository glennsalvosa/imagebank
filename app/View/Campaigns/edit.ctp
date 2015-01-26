<div class="campaigns form container">
<?php echo $this->Form->create('Campaign'); ?>
	<fieldset>
		<legend><?php echo __('Edit Campaign'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('campaign');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Campaign.id')), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $this->Form->value('Campaign.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index'), array('class' => 'btn')); ?></li>
	</ul>
</div>
