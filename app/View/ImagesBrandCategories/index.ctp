<div class="imagesBrandCategories index">
	<h2><?php echo __('Images Brand Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('image_id'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($imagesBrandCategories as $imagesBrandCategory): ?>
	<tr>
		<td><?php echo h($imagesBrandCategory['ImagesBrandCategory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imagesBrandCategory['Image']['name'], array('controller' => 'images', 'action' => 'view', $imagesBrandCategory['Image']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($imagesBrandCategory['BrandCategory']['id'], array('controller' => 'brand_categories', 'action' => 'view', $imagesBrandCategory['BrandCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imagesBrandCategory['ImagesBrandCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagesBrandCategory['ImagesBrandCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imagesBrandCategory['ImagesBrandCategory']['id']), array(), __('Are you sure you want to delete # %s?', $imagesBrandCategory['ImagesBrandCategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Images Brand Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('controller' => 'brand_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand Category'), array('controller' => 'brand_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
