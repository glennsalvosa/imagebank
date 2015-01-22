<div class="staffs view">
<h2><?php echo __('Staff'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($staff['Company']['name'], array('controller' => 'companies', 'action' => 'view', $staff['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staff'), array('action' => 'edit', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Staff'), array('action' => 'delete', $staff['Staff']['id']), array(), __('Are you sure you want to delete # %s?', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
