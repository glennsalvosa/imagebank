<div class="imagesBrandCategories form">
<?php echo $this->Form->create('ImagesBrandCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Images Brand Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('image_id');
		echo $this->Form->input('brand_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ImagesBrandCategory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ImagesBrandCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images Brand Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('controller' => 'brand_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand Category'), array('controller' => 'brand_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
