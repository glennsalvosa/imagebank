<div class="imageFilters index">
	<h2><?php echo __('Image Filters'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($imageFilters as $imageFilter): ?>
	<tr>
		<td><?php echo h($imageFilter['ImageFilter']['id']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['filter_name']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['brand']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['brand_category']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['campaign']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['category']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['season']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['staff']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['week']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['created']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['modified']); ?>&nbsp;</td>
		<td><?php echo h($imageFilter['ImageFilter']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imageFilter['ImageFilter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imageFilter['ImageFilter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imageFilter['ImageFilter']['id']), array(), __('Are you sure you want to delete # %s?', $imageFilter['ImageFilter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Image Filter'), array('action' => 'add')); ?></li>
	</ul>
</div>
