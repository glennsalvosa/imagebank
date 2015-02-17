<div class="imageFilters form">
<?php echo $this->Form->create('ImageFilter'); ?>
	<fieldset>
		<legend><?php echo __('Add Image Filter'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Image Filters'), array('action' => 'index')); ?></li>
	</ul>
</div>
