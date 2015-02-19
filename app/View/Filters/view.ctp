<div class="filters view">
<h2><?php echo __('Filter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filter['User']['name'], array('controller' => 'users', 'action' => 'view', $filter['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter Name'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['filter_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand Category'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['brand_category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['campaign']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['season']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['staff']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Filter'), array('action' => 'edit', $filter['Filter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Filter'), array('action' => 'delete', $filter['Filter']['id']), array(), __('Are you sure you want to delete # %s?', $filter['Filter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Filters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
