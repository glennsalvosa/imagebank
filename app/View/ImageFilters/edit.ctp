<div class="imageFilters form">
<?php echo $this->Form->create('ImageFilter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Image Filter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('filter_name');
		echo $this->Form->input('brand');
		echo $this->Form->input('brand_category');
		echo $this->Form->input('campaign');
		echo $this->Form->input('category');
		echo $this->Form->input('season');
		echo $this->Form->input('staff');
		echo $this->Form->input('week');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ImageFilter.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ImageFilter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Image Filters'), array('action' => 'index')); ?></li>
	</ul>
</div>
