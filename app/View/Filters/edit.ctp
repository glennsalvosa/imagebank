<div class="filters form container">
<?php echo $this->Form->create('Filter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Filter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('filter_name');
		echo $this->Form->input('brand');
		echo $this->Form->input('brand_category');
		echo $this->Form->input('campaign');
		echo $this->Form->input('category');
		echo $this->Form->input('season');
		echo $this->Form->input('staff');
		echo $this->Form->input('week');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Filter.id')), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $this->Form->value('Filter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Filters'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
