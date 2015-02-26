<div class="users">
	<ul class="breadcrumb">
		<li><?php echo $this->Html->link('User', array('action'=>'index'));?><span class="divider">/</span></li>
		<li class="active">New User</li>
	</ul>
	<?php echo $this->Form->create('User', array('class'=>'form-horizontal'));?>
		<fieldset>
			<legend><?php echo __('Edit User'); ?></legend>
		<?php
			echo $this->Form->input('id');
				echo $this->Form->input('name', 
					array(
						'div'=>'control-group',
						'before'=>'<label class="control-label">'.__('Name').'</label><div class="controls">',
						'after'=>$this->Form->error('name', array(), array('wrap' => 'span', 'class' => 'help-inline')).'</div>',
						'error' => array(
							'attributes' => array('style' => 'display:none')
						),
						'label'=>false, 
						'class'=>'input-xlarge'
					)
				);
					
				echo $this->Form->input('email', array('div'=>'control-group',
					'before'=>'<label class="control-label">'.__('Email').'</label><div class="controls">',
					'after'=>$this->Form->error('email', array(), array('wrap' => 'span', 'class' => 'help-inline')).'</div>',
					'error' => array('attributes' => array('style' => 'display:none')),
					'label'=>false, 'class'=>'input-xlarge'));
					
				echo $this->Form->input('password', array('div'=>'control-group',
					'before'=>'<label class="control-label">'.__('Password').'</label><div class="controls">',
					'after'=>$this->Form->error('password', array(), array('wrap' => 'span', 'class' => 'help-inline')).'</div>',
					'error' => array('attributes' => array('style' => 'display:none')),
					'label'=>false, 'class'=>'input-xlarge'));
					
				echo $this->Form->input('password2', array('div'=>'control-group', 'type'=>'password',
					'before'=>'<label class="control-label">'.__('Confirm Password').'</label><div class="controls">',
					'after'=>$this->Form->error('password2', array(), array('wrap' => 'span', 'class' => 'help-inline')).'</div>',
					'error' => array('attributes' => array('style' => 'display:none')),
					'label'=>false, 'class'=>'input-xlarge'));
					
				echo $this->Form->input('group_id', array('div'=>'control-group',
					'before'=>'<label class="control-label">'.__('Group').'</label><div class="controls">',
					'after'=>'</div>','label'=>false, 'class'=>'input-xlarge'));
					
				echo $this->Form->input('status', array('div'=>'control-group',
					'before'=>'<label class="control-label">'.__('Status').'</label><div class="controls">',
					'after'=>'</div>','label'=>false, 'class'=>''));
		?>
			
			
			<div class="control-group">
				<label class="control-label">Brand</label>
				<div class="controls">
					<?php	echo $this->Form->input('Brand', array('id' => 'brand_selector', 'div' => false, 'label' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
					<a class="dynamic-trigger" href="#brand_creator">Add More</a>
				</div>
			</div>
		
			<div>
				<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary', 'div'=>false));?>
				<?php echo $this->Form->reset(__('Cancel'), array('class'=>'btn', 'div'=>false));?>
			</div>
		</fieldset>
	<?php echo $this->Form->end();?>
</div>

<div class="hidden">
	<div id="brand_creator" style="width: 350px;">
		<form action="/brands/add?mode=ajax" id="brand_creator" class="ajaxForm" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>Create New Brand</legend>
				<?php echo $this->Form->input('Brand.brand', array('type' => 'text', 'required' => true)); ?>
				<?php echo $this->Form->input('Brand.description'); ?>
			</fieldset>
			
			<fieldset>
				<legend>Brand Categories</legend>
				<div class="left full"><input name="data[BrandCategory][category][]" maxlength="100" type="text" id="brand_category_0"></div>
				<div id="appending_data"></div>
				<br />
				<input type="button" class="btn btn-primary" value="More Category" id="more_category">
			</fieldset>
			
			<br />
			<input type="submit" id="brand_creator" class="module-creation-trigger">
		</form>
	</div>
</div>

<input type="hidden" id="module_triggered" />
<input type="hidden" id="selected_brands_holder" />

<script type="text/javascript">
	$(document).ready( function () {
		$('.dynamic-trigger').fancybox();
		
		$('#more_category').click( function () {
			var append_id = makeid();
			var append_content = '<div id="'+append_id+'" class="left full"><input class="left" name="data[BrandCategory][category][]" maxlength="100" type="text" id="'+append_id+'"><input type="button" value="Remove" class="append_category_remove left btn" id="'+append_id+'"></div>';
			$('#appending_data').append(append_content);
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
		
		// to identify the currently triggered module form
		$('.ajaxForm').submit(function (){
			var form_id = $(this).attr('id');
			$('#module_triggered').val(form_id);
		});
		
		// bind form using 'ajaxForm' 
		$('.ajaxForm').ajaxForm({
			complete: function (xhr, textStatus) {
				var form_id = $('#module_triggered').val();
				var untouched_id = $('#module_triggered').val();
				var to_append = xhr.responseText;
				var module = form_id.split('_creator');
				
				$("#"+module[0]+"_selector").append(to_append);
				
				// resetting the chosen dropdown box to cater the additional newly created entry of triggered module
				$("#"+module[0]+"_selector").trigger("chosen:updated");
				
				var selected_brands = $("#"+module[0]+"_selector").chosen().val();
				if(selected_brands) {
					var flatten_selected_brand = selected_brands.join(',');			
					$('#selected_brands_holder').val(flatten_selected_brand);
				}
				
				var module_raw_string = module[0];
				var capitalized_module_name = module_raw_string.charAt(0).toUpperCase() + module_raw_string.slice(1);
				
				alert(capitalized_module_name+" has been created");				
				
				$('form#'+untouched_id)[0].reset();
				$.fancybox.close();
			}
		});
	});
</script>