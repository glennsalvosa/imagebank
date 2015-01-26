<div class="weeks form container">
<?php echo $this->Form->create('Week'); ?>
	<fieldset>
		<legend><?php echo __('Edit Week'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('period');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
		echo $this->Form->input('Image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Week.id')), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $this->Form->value('Week.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Weeks'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
