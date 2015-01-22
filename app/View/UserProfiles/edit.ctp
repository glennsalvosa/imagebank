<div class="userProfiles form container">
<?php echo $this->Form->create('UserProfile'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Profile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('middlename');
		echo $this->Form->input('lastname');
		echo $this->Form->input('company_name');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
		echo $this->Form->input('email_address');
		echo $this->Form->input('mobile_number');
		echo $this->Form->input('land_line_nuber');
		echo $this->Form->input('office_number');
		echo $this->Form->input('position');
		echo $this->Form->input('gender');
		echo $this->Form->input('civil_status');
		echo $this->Form->input('user_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserProfile.id')), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $this->Form->value('UserProfile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Profiles'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
