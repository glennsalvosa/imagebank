<div class="downloads view">
<h2><?php echo __('Download'); ?></h2>
	<table>
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($download['Download']['id']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Image'); ?></td>
			<td>
				<?php echo $this->Html->link($download['Image']['name'], array('controller' => 'images', 'action' => 'view', $download['Image']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('User'); ?></td>
			<td>
				<?php echo $this->Html->link($download['User']['name'], array('controller' => 'users', 'action' => 'view', $download['User']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($download['Download']['created']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($download['Download']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($download['Download']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Download'), array('action' => 'edit', $download['Download']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Download'), array('action' => 'delete', $download['Download']['id']), array(), __('Are you sure you want to delete # %s?', $download['Download']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Downloads'), array('action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download'), array('action' => 'atd'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
