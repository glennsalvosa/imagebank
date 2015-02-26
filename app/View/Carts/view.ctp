<div class="carts view">
<h2><?php echo __('Cart'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['items']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['User']['name'], array('controller' => 'users', 'action' => 'view', $cart['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cart'), array('action' => 'edit', $cart['Cart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cart'), array('action' => 'delete', $cart['Cart']['id']), array(), __('Are you sure you want to delete # %s?', $cart['Cart']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
