<div class="filters index container">
	<h2><?php echo __('Filters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('filter_name'); ?></th>
			<th><?php echo $this->Paginator->sort('brand'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_category'); ?></th>
			<th><?php echo $this->Paginator->sort('campaign'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('season'); ?></th>
			<th><?php echo $this->Paginator->sort('staff'); ?></th>
			<th><?php echo $this->Paginator->sort('week'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($filters as $filter): ?>
	<tr>
		<td><?php echo h($filter['Filter']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($filter['User']['name'], array('controller' => 'users', 'action' => 'view', $filter['User']['id'])); ?>
		</td>
		<td><?php echo h($filter['Filter']['filter_name']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['brand']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['brand_category']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['campaign']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['category']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['season']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['staff']); ?>&nbsp;</td>
		<td><?php echo h($filter['Filter']['week']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'filter', $filter['Filter']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $filter['Filter']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $filter['Filter']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $filter['Filter']['id'])); ?>
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
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Filter'), array('action' => 'add'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
