<div class="brands form container">
	<?php echo $this->Form->create('Brand'); ?>
		<fieldset>
			<legend><?php echo __('Edit Brand'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('brand');
			echo $this->Form->input('description');
		?>
		</fieldset>
		
		<fieldset>
			<legend>Brand Categories</legend>
			<div id="appending_data">
				<?php foreach($this->request->data['BrandCategory'] as $category) { ?>
					<div id="<?php echo $category['id']; ?>" class="left full">
						<input class="left" name="data[BrandCategory][<?php echo $category['id']; ?>][id]" value="<?php echo $category['id']; ?>" type="hidden">
						<input class="left" name="data[BrandCategory][<?php echo $category['id']; ?>][category]" maxlength="100" type="text" id="<?php echo $category['id']; ?>" value="<?php echo $category['category']; ?>">
						<input type="button" value="Remove" class="append_category_remove left btn" id="<?php echo $category['id'];  ?>">
					</div>
				<?php } ?>
			</div>
			<br />
			<input type="button" class="btn btn-primary" value="More Category" id="more_category">
		</fieldset>
		
		<br /><br /><br />
		<input type="submit" class="btn btn-danger">
	<?php echo $this->Form->end(); ?>
</div>

<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Brand.id')), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $this->Form->value('Brand.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>

<script>
	$(document).ready( function () {
		$('#more_category').click( function () {
			var append_id = makeid();
			var append_content = '<div id="'+append_id+'" class="left full"><input class="left" name="data[BrandCategory]['+append_id+'][category]" maxlength="100" type="text" id="'+append_id+'"><input type="button" value="Remove" class="append_category_remove left btn" id="'+append_id+'"></div>';
			$('#appending_data').append(append_content);
		});
	});
	
	$(document).on("click", ".append_category_remove", function () {
		var append_id_to_remove = $(this).attr('id');
		$('div#'+append_id_to_remove).remove();
	});
	
	function makeid() {
		var text = "";
		var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

		for( var i=0; i < 10; i++ )
			text += possible.charAt(Math.floor(Math.random() * possible.length));

		return text;
	}
</script>