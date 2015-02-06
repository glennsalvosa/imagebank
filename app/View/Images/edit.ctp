<div class="images form container">
<?php echo $this->Form->create('Image', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Edit Image'); ?></legend>

		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			
			echo "<br />";
			echo $this->Form->input('location', array('type' => 'file', 'label' => 'Image Product'));
			
			if(!empty($this->request->data['Image']['location'])) { 
				?>
					<a class="fancybox" href="<?php echo '/img/uploaded/'.$this->request->data['Image']['location']; ?>">Current Image</a>
				<?php 
			}
			
			echo "<br /><br />";
			
			echo $this->Form->input('original_location', array('value' => $this->request->data['Image']['location'], 'type' => 'hidden'));
			echo $this->Form->input('description');
			echo $this->Form->input('user_id');
			echo $this->Form->input('status');
		?>
		
		<div class="elementHolder">
			<?php	echo $this->Form->input('Brand', array('id' => 'brand_selector', 'div' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
			<a class="dynamic-trigger" href="#brand_creator">Add More</a>
		</div>
		
		<div class="elementHolder">
			<div id="loaded_brand_category">
				<h4>Brand Categories</h4>
				<ul style="list-style: none;">
					<?php
						foreach($this->request->data['BrandCategory'] as $brand_category) {
							?>
								<li>
									<label><input checked type="checkbox" name="data[BrandCategory][BrandCategory][]" value="<?php echo $brand_category['id']; ?>"><?php echo $brand_category['category']; ?></label>
								</li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
		
		<div class="elementHolder">
			<?php	echo $this->Form->input('Campaign', array('id' => 'campaign_selector', 'div' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
			<a class="dynamic-trigger" href="#campaign_creator">Add More</a>
		</div>
		
		<div class="elementHolder">
			<?php	echo $this->Form->input('Category', array('id' => 'category_selector', 'div' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
			<a class="dynamic-trigger" href="#category_creator">Add More</a>
		</div>
		
		<div class="elementHolder">
			<?php	echo $this->Form->input('Season', array('id' => 'season_selector', 'div' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
			<a class="dynamic-trigger" href="#season_creator">Add More</a>
		</div>
		
		<div class="elementHolder">
			<?php	echo $this->Form->input('Staff', array('id' => 'staff_selector', 'div' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
			<a class="dynamic-trigger" href="#staff_creator">Add More</a>
		</div>
		
		<div class="elementHolder">
			<?php	echo $this->Form->input('Week', array('id' => 'week_selector', 'div' => false, 'class' => 'chosen-select', 'multiple' => true)); ?>
			<a class="dynamic-trigger" href="#week_creator">Add More</a>
		</div>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Downloads'), array('controller' => 'downloads', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download'), array('controller' => 'downloads', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('controller' => 'brand_categories', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand Category'), array('controller' => 'brand_categories', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weeks'), array('controller' => 'weeks', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Week'), array('controller' => 'weeks', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>

<!-- ---------------------------------------------------------------	 DYNAMIC CREATION OF MODULES FROM THIS POINT - POPUPS ------------------------------------------------------------- -->

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
	
	<div id="campaign_creator">
		<form id="campaign_creator" class="ajaxForm" action="/campaigns/add?mode=ajax" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>Create New Campaign</legend>
				<?php echo $this->Form->input('Campaign.campaign', array('type' => 'text', 'required' => true)); ?>
				<?php echo $this->Form->input('Campaign.description'); ?>
				<input type="submit" id="campaign_creator" class="module-creation-trigger">
			</fieldset>
		</form>
	</div>
	
	<div id="category_creator">
		<form action="/categories/add?mode=ajax" id="category_creator" class="ajaxForm" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>Create New Category</legend>
				<?php echo $this->Form->input('Category.category', array('type' => 'text', 'required' => true)); ?>
				<?php echo $this->Form->input('Category.description'); ?>
				<input type="submit" id="category_creator" class="module-creation-trigger">
			</fieldset>
		</form>
	</div>
	
	<div id="season_creator">
		<form id="season_creator" class="ajaxForm" action="/seasons/add?mode=ajax" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>Create New Season</legend>
				<?php echo $this->Form->input('Season.season', array('type' => 'text', 'required' => true)); ?>
				<?php echo $this->Form->input('Season.description'); ?>
				<input type="submit" id="season_creator" class="module-creation-trigger">
			</fieldset>
		</form>
	</div>
	
	<div id="staff_creator">
		<form id="staff_creator" class="ajaxForm" action="/staffs/add?mode=ajax" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>Create New Staff</legend>
				<?php echo $this->Form->input('Staff.name', array('type' => 'text', 'required' => true)); ?>
				<?php echo $this->Form->input('Staff.position'); ?>
				<?php echo $this->Form->input('Staff.company'); ?>
				<input type="submit" id="staff_creator" class="module-creation-trigger">
			</fieldset>
		</form>
	</div>
	
	<div id="week_creator">
		<form action="/weeks/add?mode=ajax" method="post" accept-charset="utf-8" id="week_creator" class="ajaxForm">
			<fieldset>
				<legend>Create New Week</legend>
				<?php echo $this->Form->input('Week.period', array('type' => 'text', 'required' => true)); ?>
				<?php echo $this->Form->input('Week.description'); ?>
				<input type="submit" id="week_creator" class="module-creation-trigger">
			</fieldset>
		</form>
	</div>
</div>

<input type="hidden" id="module_triggered" />
<input type="hidden" id="selected_brands_holder" />

<script type="text/javascript">
	$(document).ready( function () {
		$('.dynamic-trigger').fancybox();
		
		$("#brand_selector").chosen().change(function(e, params){
			var selected_brands = $(this).chosen().val();
			
			if(selected_brands) {
				var flatten_selected_brand = selected_brands.join(',');
			}
			
			$('#selected_brands_holder').val(flatten_selected_brand);
			
			load_brand_categories();
		});
		
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
				
				var module_raw_string = module[0];
				var capitalized_module_name = module_raw_string.charAt(0).toUpperCase() + module_raw_string.slice(1);
				
				alert(capitalized_module_name+" has been created");				
				
				$('form#'+untouched_id)[0].reset();
				$.fancybox.close();
				
				load_brand_categories();
			}
		});
		
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
		
		function load_brand_categories() {
			$.ajax({
				async:true,
				data:'selected_brands_holder='+$('#selected_brands_holder').val(),
				dataType:'html',
				success:function (data, textStatus) {
					$('#loaded_brand_category').html(data);
				},
				type:'post',
				url:"/brand_categories/get_checklist"
			});
		}
	});
</script>