<div class="histories view container">
<h2><?php echo __('History'); ?></h2>
	<table>
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($history['History']['id']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('User'); ?></td>
			<td>
				<?php echo $this->Html->link($history['User']['name'], array('controller' => 'users', 'action' => 'view', $history['User']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($history['History']['created']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($history['History']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($history['History']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit History'), array('action' => 'edit', $history['History']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete History'), array('action' => 'delete', $history['History']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
