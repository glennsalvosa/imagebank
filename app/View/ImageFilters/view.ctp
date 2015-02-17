<div class="imageFilters view">
<h2><?php echo __('Image Filter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter Name'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['filter_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand Category'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['brand_category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['campaign']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['season']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['staff']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($imageFilter['ImageFilter']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image Filter'), array('action' => 'edit', $imageFilter['ImageFilter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Image Filter'), array('action' => 'delete', $imageFilter['ImageFilter']['id']), array(), __('Are you sure you want to delete # %s?', $imageFilter['ImageFilter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Filters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Filter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
