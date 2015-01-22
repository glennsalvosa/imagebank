<div class="companies form container">
	<?php echo $this->Form->create('Company'); ?>
		<fieldset>
			<legend><?php echo __('Add Company'); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('address');
			echo $this->Form->input('contact');
			echo $this->Form->input('description');
			echo $this->Form->input('status');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
