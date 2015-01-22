<div class="seasons view">
<h2><?php echo __('Season'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($season['Season']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo h($season['Season']['season']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($season['Season']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($season['Season']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($season['Season']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($season['Season']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Season'), array('action' => 'edit', $season['Season']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Season'), array('action' => 'delete', $season['Season']['id']), array(), __('Are you sure you want to delete # %s?', $season['Season']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('action' => 'add')); ?> </li>
	</ul>
</div>
