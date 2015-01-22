<div class="brandCategories form">
<?php echo $this->Form->create('BrandCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Brand Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BrandCategory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('BrandCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
	</ul>
</div>
