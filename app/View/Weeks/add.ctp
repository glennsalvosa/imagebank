<div class="weeks form">
<?php echo $this->Form->create('Week'); ?>
	<fieldset>
		<legend><?php echo __('Add Week'); ?></legend>
	<?php
		echo $this->Form->input('period');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
		echo $this->Form->input('Image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Weeks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
