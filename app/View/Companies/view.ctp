<div class="companies view container">
<h2><?php echo __('Company'); ?></h2>
	<table>
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($company['Company']['id']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Name'); ?></td>
			<td>
				<?php echo h($company['Company']['name']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Address'); ?></td>
			<td>
				<?php echo h($company['Company']['address']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Contact'); ?></td>
			<td>
				<?php echo h($company['Company']['contact']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Description'); ?></td>
			<td>
				<?php echo h($company['Company']['description']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($company['Company']['created']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($company['Company']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($company['Company']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		</ul>
	</div>
</div>
