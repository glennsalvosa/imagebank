<div class="weeks view">
<h2><?php echo __('Week'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($week['Week']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period'); ?></dt>
		<dd>
			<?php echo h($week['Week']['period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($week['Week']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($week['Week']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($week['Week']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($week['Week']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Week'), array('action' => 'edit', $week['Week']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Week'), array('action' => 'delete', $week['Week']['id']), array(), __('Are you sure you want to delete # %s?', $week['Week']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Weeks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Week'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Images'); ?></h3>
	<?php if (!empty($week['Image'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
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
			<td><?php echo $image['brand_id']; ?></td>
			<td><?php echo $image['user_id']; ?></td>
			<td><?php echo $image['created']; ?></td>
			<td><?php echo $image['modified']; ?></td>
			<td><?php echo $image['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), array(), __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
