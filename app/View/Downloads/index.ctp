<div class="downloads index container">
	<h2><?php echo __('Downloads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('image_id'); ?></th>
				<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th><?php echo $this->Paginator->sort('status'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($downloads as $download): ?>
				<tr>
					<td><?php echo h($download['Download']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($download['Image']['name'], array('controller' => 'images', 'action' => 'view', $download['Image']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($download['User']['name'], array('controller' => 'users', 'action' => 'view', $download['User']['id'])); ?>
					</td>
					<td><?php echo h($download['Download']['created']); ?>&nbsp;</td>
					<td><?php echo h($download['Download']['modified']); ?>&nbsp;</td>
					<td><?php echo h($download['Download']['status']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $download['Download']['id']), array('class' => 'btn btn-primary')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $download['Download']['id']), array('class' => 'btn btn-warning')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $download['Download']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $download['Download']['id'])); ?>
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
		?>
	</p>
	
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
		<li><?php echo $this->Html->link(__('New Download'), array('action' => 'add'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
