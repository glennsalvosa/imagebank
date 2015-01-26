<div class="brandCategories index container">
	<h2><?php echo __('Brand Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($brandCategories as $brandCategory): ?>
	<tr>
		<td><?php echo h($brandCategory['BrandCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($brandCategory['BrandCategory']['category']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($brandCategory['Brand']['brand'], array('controller' => 'brands', 'action' => 'view', $brandCategory['Brand']['id'])); ?>
		</td>
		<td><?php echo h($brandCategory['BrandCategory']['description']); ?>&nbsp;</td>
		<td><?php echo h($brandCategory['BrandCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($brandCategory['BrandCategory']['modified']); ?>&nbsp;</td>
		<td><?php echo h($brandCategory['BrandCategory']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $brandCategory['BrandCategory']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $brandCategory['BrandCategory']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $brandCategory['BrandCategory']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $brandCategory['BrandCategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Brand Category'), array('action' => 'add'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
