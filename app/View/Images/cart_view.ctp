<div class="images index container">
	<h2><?php echo __('Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($images as $image): ?>
	<tr>
		<td width="5%"><?php echo h($image['Image']['id']); ?>&nbsp;</td>
		<td width="8%"><?php echo h($image['Image']['name']); ?>&nbsp;</td>
		<td width="8%">
			<?php if(!empty($image['Image']['location'])) { ?>
				<a class="fancybox" href="<?php echo '/img/uploaded/'.$image['Image']['location']; ?>">Click Here To View</a>
			<?php } else { ?>
				Image Not Present
			<?php } ?>
		</td>
		<td width="11%"><?php echo h($image['Image']['description']); ?>&nbsp;</td>
		<td width="11%">
			<?php echo $this->Html->link($image['User']['name'], array('controller' => 'users', 'action' => 'view', $image['User']['id'])); ?>
		</td>
		<td width="11%"><?php echo h($image['Image']['created']); ?>&nbsp;</td>
		<td width="11%"><?php echo h($image['Image']['modified']); ?>&nbsp;</td>
		<td width="5%"><?php echo h($image['Image']['status']); ?>&nbsp;</td>
		<td width="28%" class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $image['Image']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Download Items'), array('action' => 'download_cart_items', $hash), array('class' => 'btn')); ?></li>
	</ul>
</div>