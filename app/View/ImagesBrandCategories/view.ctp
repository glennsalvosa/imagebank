<div class="imagesBrandCategories view">
<h2><?php echo __('Images Brand Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesBrandCategory['ImagesBrandCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesBrandCategory['Image']['name'], array('controller' => 'images', 'action' => 'view', $imagesBrandCategory['Image']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesBrandCategory['BrandCategory']['id'], array('controller' => 'brand_categories', 'action' => 'view', $imagesBrandCategory['BrandCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Images Brand Category'), array('action' => 'edit', $imagesBrandCategory['ImagesBrandCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Images Brand Category'), array('action' => 'delete', $imagesBrandCategory['ImagesBrandCategory']['id']), array(), __('Are you sure you want to delete # %s?', $imagesBrandCategory['ImagesBrandCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Brand Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Brand Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('controller' => 'brand_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand Category'), array('controller' => 'brand_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
