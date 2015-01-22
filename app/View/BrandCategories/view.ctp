<div class="brandCategories view">
<h2><?php echo __('Brand Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($brandCategory['BrandCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($brandCategory['BrandCategory']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($brandCategory['Brand']['brand'], array('controller' => 'brands', 'action' => 'view', $brandCategory['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($brandCategory['BrandCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($brandCategory['BrandCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($brandCategory['BrandCategory']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($brandCategory['BrandCategory']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brand Category'), array('action' => 'edit', $brandCategory['BrandCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brand Category'), array('action' => 'delete', $brandCategory['BrandCategory']['id']), array(), __('Are you sure you want to delete # %s?', $brandCategory['BrandCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
	</ul>
</div>
