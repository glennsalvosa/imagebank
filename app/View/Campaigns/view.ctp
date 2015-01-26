<div class="campaigns view container">
<h2><?php echo __('Campaign'); ?></h2>
	<table>
	
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($campaign['Campaign']['id']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Campaign'); ?></td>
			<td>
				<?php echo h($campaign['Campaign']['campaign']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Description'); ?></td>
			<td>
				<?php echo h($campaign['Campaign']['description']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($campaign['Campaign']['created']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($campaign['Campaign']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($campaign['Campaign']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>

<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign'), array('action' => 'edit', $campaign['Campaign']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campaign'), array('action' => 'delete', $campaign['Campaign']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
