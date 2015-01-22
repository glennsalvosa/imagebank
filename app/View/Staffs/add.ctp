<div class="staffs form">
<?php echo $this->Form->create('Staff'); ?>
	<fieldset>
		<legend><?php echo __('Add Staff'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('position');
		echo $this->Form->input('company_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
