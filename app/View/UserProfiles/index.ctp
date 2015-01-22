<div class="userProfiles index">
	<h2><?php echo __('User Profiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('middlename'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_number'); ?></th>
			<th><?php echo $this->Paginator->sort('land_line_nuber'); ?></th>
			<th><?php echo $this->Paginator->sort('office_number'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('civil_status'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userProfiles as $userProfile): ?>
	<tr>
		<td><?php echo h($userProfile['UserProfile']['id']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['middlename']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['street']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['city']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['country']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['mobile_number']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['land_line_nuber']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['office_number']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['position']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['gender']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['civil_status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userProfile['User']['name'], array('controller' => 'users', 'action' => 'view', $userProfile['User']['id'])); ?>
		</td>
		<td><?php echo h($userProfile['UserProfile']['created']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userProfile['UserProfile']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userProfile['UserProfile']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userProfile['UserProfile']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $userProfile['UserProfile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Profile'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
