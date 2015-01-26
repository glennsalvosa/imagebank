<div class="weeks view container">
<h2><?php echo __('Week'); ?></h2>
	<table>
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($week['Week']['id']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Period'); ?></td>
			<td>
				<?php echo h($week['Week']['period']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Description'); ?></td>
			<td>
				<?php echo h($week['Week']['description']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($week['Week']['created']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($week['Week']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($week['Week']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Week'), array('action' => 'edit', $week['Week']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Week'), array('action' => 'delete', $week['Week']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $week['Week']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Weeks'), array('action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Week'), array('action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
<div class="related container">
	<h3><?php echo __('Related Images'); ?></h3>
	<?php if (!empty($week['Image'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($week['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id']; ?></td>
			<td><?php echo $image['name']; ?></td>
			<td><?php echo $image['location']; ?></td>
			<td><?php echo $image['description']; ?></td>
			<td><?php echo $image['user_id']; ?></td>
			<td><?php echo $image['created']; ?></td>
			<td><?php echo $image['modified']; ?></td>
			<td><?php echo $image['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id']), array('class' => 'btn')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id']), array('class' => 'btn')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions container">
		<ul>
			<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		</ul>
	</div>
</div>
