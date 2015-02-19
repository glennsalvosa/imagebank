<div class="container">
	<div class="span12">
		<div class="span4 left" style="margin: 0px;">
			<form id="image_filter" method="POST">
				<fieldset>
					<label id="brand_option_toggle" class="module_toggle">Brands</label>
					<ul <?php if($filters['Filter']['brand'] != "") { echo "style='display:block;'"; } ?> class="options_toggle" id="brand_option_toggle">
						<?php
							foreach($brands as $brand_key => $brand) {
								?>
									<li>
										<label>
											<div class="left">
												<input <?php if(in_array($brand['Brand']['id'], explode(",", $filters['Filter']['brand']))) { echo "checked=checked"; } ?> type="checkbox" class="left brand_selection filter_toggle" name="data[Brand][id][]" value="<?php echo $brand['Brand']['id']; ?>">&nbsp;<?php echo $brand['Brand']['brand']; ?>
											</div>
											<?php if(count($brand['BrandCategory']) > 0) { ?>
												<a href="#" class="left brand_selection_toggle" id="brand_selection_<?php echo $brand['Brand']['id']; ?>">
													<?php if(in_array($brand['Brand']['id'], explode(",", $filters['Filter']['brand']))) { echo "Hide"; } else { echo "Expand"; } ?>
												</a>
											<?php } ?>
										</label>
										<ul <?php if(in_array($brand['Brand']['id'], explode(",", $filters['Filter']['brand']))) { echo "style='display:block;'"; } ?> class="brand_category brand_category_selection" id="brand_selection_<?php echo $brand['Brand']['id']; ?>">
											<?php foreach($brand['BrandCategory'] as $brand_category) { ?>
												<li>
													<label>
														<input <?php if(in_array($brand_category['id'], explode(",", $filters['Filter']['brand_category']))) { echo "checked=checked"; } ?> type="checkbox" class="brand_category_selection filter_toggle" name="data[BrandCategory][id][]" value="<?php echo $brand_category['id']; ?>"> <?php echo $brand_category['category']; ?>
													</label>
												</li>
											<?php } ?>
										</ul>
									</li>
								<?php
							}
						?>
					</ul>
				</fieldset>
				
				<fieldset>
					<label id="campaign_option_toggle" class="module_toggle">Campaigns</label>
					<ul <?php if($filters['Filter']['campaign'] != "") { echo "style='display:block;'"; } ?> class="options_toggle" id="campaign_option_toggle">
						<?php
							foreach($campaigns as $campaign_key => $campaign) {
								?>
									<li><label><input <?php if(in_array($campaign_key, explode(",", $filters['Filter']['campaign']))) { echo "checked=checked"; } ?> type="checkbox" class="campaign_selection filter_toggle" name="data[Campaign][id][]" value="<?php echo $campaign_key; ?>"> <?php echo $campaign; ?></label></li>
								<?php
							}
						?>
					</ul>
				</fieldset>
				
				<fieldset>
					<label id="category_option_toggle" class="module_toggle">Categories</label>
					<ul <?php if($filters['Filter']['category'] != "") { echo "style='display:block;'"; } ?> class="options_toggle" id="category_option_toggle">
						<?php
							foreach($categories as $category_key => $category) {
								?>
									<li><label><input <?php if(in_array($category_key, explode(",", $filters['Filter']['category']))) { echo "checked=checked"; } ?> type="checkbox" class="category_selection filter_toggle" name="data[Category][id][]" value="<?php echo $category_key; ?>"> <?php echo $category; ?></label></li>
								<?php
							}
						?>
					</ul>
				</fieldset>
				
				
				<fieldset>
					<label id="season_option_toggle" class="module_toggle">Seasons</label>
					<ul <?php if($filters['Filter']['season'] != "") { echo "style='display:block;'"; } ?> class="options_toggle" id="season_option_toggle">
						<?php
							foreach($seasons as $season_key => $season) {
								?>
									<li><label><input <?php if(in_array($season_key, explode(",", $filters['Filter']['season']))) { echo "checked=checked"; } ?> type="checkbox" class="season_selection filter_toggle" name="data[Season][id][]" value="<?php echo $season_key; ?>"> <?php echo $season; ?></label></li>
								<?php
							}
						?>
					</ul>
				</fieldset>
				
				<fiedset>
					<label id="staff_option_toggle" class="module_toggle">Staffs</label>
					<ul <?php if($filters['Filter']['staff'] != "") { echo "style='display:block;'"; } ?> class="options_toggle" id="staff_option_toggle">
						<?php
							foreach($staffs as $staff_key => $staff) {
								?>
									<li><label><input <?php if(in_array($staff_key, explode(",", $filters['Filter']['staff']))) { echo "checked=checked"; } ?> type="checkbox" class="staff_selection filter_toggle" name="data[Staff][id][]" value="<?php echo $staff_key; ?>"> <?php echo $staff; ?></label></li>
								<?php
							}
						?>
					</ul>
				</fieldset>
				
				<fieldset>
					<label id="week_option_toggle" class="module_toggle">Week</label>
					<ul <?php if($filters['Filter']['week'] != "") { echo "style='display:block;'"; } ?> class="options_toggle" id="week_option_toggle">
						<?php
							foreach($weeks as $week_key => $week) {
								?>
									<li><label><input <?php if(in_array($week_key, explode(",", $filters['Filter']['week']))) { echo "checked=checked"; } ?> type="checkbox" class="week_selection filter_toggle" name="data[Week][id][]" value="<?php echo $week_key; ?>"> <?php echo $week; ?></label></li>
								<?php
							}
						?>
					</ul>
				</fieldset>
			</form>
		</div>
		
		<div class="span8 left"><div id="results_holder"></div></div>
	</div>
	
	<?php if(isset($filters)) { ?>
		<a id="image_filter_trigger" class="fancybox" href="#image_filter_form_holder"><input type="button" class="btn btn-danger" id="save_filter" value="Update Filter"></a>
	<?php } else { ?>
		<a id="image_filter_trigger" class="fancybox" href="#image_filter_form_holder"><input type="button" class="btn btn-danger" id="save_filter" value="Save Filter"></a>
	<?php } ?>
	
	<div id="cart_status">
		<a class="fancybox fancybox.iframe" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/cart_items"><h4 style="margin: 0;">View Cart</h4></a>
		Current item(s) in cart: <span id="curent_item_count"><?php if(isset($_SESSION['image_cart'])) { echo count($_SESSION['image_cart']); } else { echo "0"; } ?></span>
	</div>
</div>

<div class="hidden">
	<div id="image_filter_form_holder">
		<form method="post" id="filter_form" class="ajaxForm" action="/filters/ajax_add">
			
			<div id="image_filter_values" class="input text">
				<label><strong>Filter Name</strong></label>
				<?php if(isset($filters)) { ?>
					<input name="data[Filter][filter_name]" type="text" value="<?php echo $filters['Filter']['filter_name']; ?>">
					<input name="data[Filter][id]" type="hidden" value="<?php echo $filters['Filter']['id']; ?>">
				<?php } else { ?>
					<input name="data[Filter][filter_name]" type="text">
				<?php } ?>
				<input name="data[Filter][user_id]" type="hidden" value="<?php echo $this->Session->read('Auth.User.id') ?>">
				<input name="data[Filter][brand]" type="hidden" id="brand_selection_compiled" value="<?php echo $filters['Filter']['brand']; ?>">
				<input name="data[Filter][brand_category]" type="hidden" id="brand_category_selection_compiled" value="<?php echo $filters['Filter']['brand_category']; ?>">
				<input name="data[Filter][campaign]" type="hidden" id="campaign_selection_compiled" value="<?php echo $filters['Filter']['campaign']; ?>">
				<input name="data[Filter][category]" type="hidden" id="category_selection_compiled" value="<?php echo $filters['Filter']['category']; ?>">
				<input name="data[Filter][season]" type="hidden" id="season_selection_compiled" value="<?php echo $filters['Filter']['season']; ?>">
				<input name="data[Filter][staff]" type="hidden" id="staff_selection_compiled" value="<?php echo $filters['Filter']['staff']; ?>">
				<input name="data[Filter][week]" type="hidden" id="week_selection_compiled" value="<?php echo $filters['Filter']['week']; ?>">
			</div>
			
			<?php if(isset($filters)) { ?>
				<input type="submit" class="btn btn-danger" value="Update Filter" id="popup_save_filter">
			<?php } else { ?>
				<input type="submit" class="btn btn-danger" value="Save Filter" id="popup_save_filter">
			<?php } ?>
		</form>
	</div>
</div>
<div class="hidden" id="close-fancybox"></a>

<script>
	$(document).ready( function () {
		$(".fancybox").fancybox();
		
		<?php if(isset($filters)) { ?>
			generate_result();
		<?php } ?>
		
		$(document).on("click", ".addCart", function () {
			var image_id = $(this).attr('id');
			var orig_id = image_id;
			image_id = image_id.split("_");
			
			$.ajax({
				async:true,
				dataType:'html',
				success:function (data, textStatus) {
					$('#'+orig_id).hide();
					$('#removeCart_'+image_id[1]).show();
					
					alert('Added to cart');
					$('#curent_item_count').html(data);
				},
				type:'post',
				url:"<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/images/add_to_cart/"+image_id[1]
			});
			
			return false;
		});
		
		$(document).on("click", ".removeCart", function () {
			var image_id = $(this).attr('id');
			var orig_id = image_id;
			image_id = image_id.split("_");
			
			$.ajax({
				async:true,
				dataType:'html',
				success:function (data, textStatus) {
					$('#'+orig_id).hide();
					$('#addCart_'+image_id[1]).show();
					
					alert('Removed from cart');
					$('#curent_item_count').html(data);
				},
				type:'post',
				url:"<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/images/remove_from_cart/"+image_id[1]
			});
			
			return false;
		});
	
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		// saving of filters
		$('.ajaxForm').ajaxForm({
			complete: function (xhr, textStatus) {
				console.log(xhr.responseText);
				if(xhr.responseText != 0) {
					
					if($('#popup_save_filter').val() == "Save Filter") {
						$('#image_filter_values').append('<input name="data[Filter][id]" type="hidden" value="'+xhr.responseText+'">');
						$('#save_filter').val('Update Filter');
						$('#popup_save_filter').val('Update Filter');
						$('#filter_form').attr("action", "/filters/ajax_edit");
						alert('The filter was succesfully saved');
						$.fancybox.close();
						return false;
					} else {
						alert('The filter was succesfully updated');
						$.fancybox.close();
						return false;
					}
				}
			}
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		// making sure that saving filters is not allowed not unless there are selected filters
		$(document).on("click", "#save_filter", function () {
			if(
				$('#brand_selection_compiled').val() == "" &&
				$('#brand_category_selection_compiled').val() == "" &&
				$('#campaign_selection_compiled').val() == "" &&
				$('#category_selection_compiled').val() == "" &&
				$('#season_selection_compiled').val() == "" &&
				$('#staff_selection_compiled').val() == "" &&
				$('#week_selection_compiled').val() == ""
			) {
				alert('Please make sure that you have selected a filter');
				return false;
			} else {
				$("a#image_filter_trigger").trigger("click");
			}
		});
		
		/* -------------------------------------------------------- will log a compiled array values of selected filters - this is for the purpose of saving the results ----------------------------------------------------*/
		$('.brand_category_selection').click( function () {
			var brand_category_selection = new Array();
			var brand_category_increment = 0;
			$('.brand_category_selection').each( function () {
				if($(this).is(":checked")) {
					brand_category_selection[brand_category_increment] = $(this).val();
					brand_category_increment++;
				}
				
				brand_category_selection.join();
				$('#brand_category_selection_compiled').val(brand_category_selection);
			});
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		$('.brand_selection').click( function () {
			var brand_selection = new Array();
			var brand_increment = 0;
			$('.brand_selection').each( function () {
				if($(this).is(":checked")) {
					brand_selection[brand_increment] = $(this).val();
					brand_increment++;
				}
				
				brand_selection.join();
				$('#brand_selection_compiled').val(brand_selection);
			});
		
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		$('.campaign_selection').click( function () {
			var campaign_selection = new Array();
			var campaign_increment = 0;
			$('.campaign_selection').each( function () {
				if($(this).is(":checked")) {
					campaign_selection[campaign_increment] = $(this).val();
					campaign_increment++;
				}
				
				campaign_selection.join();
				$('#campaign_selection_compiled').val(campaign_selection);
			});
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		$('.category_selection').click( function () {
			var category_selection = new Array();
			var category_increment = 0;
			$('.category_selection').each( function () {
				if($(this).is(":checked")) {
					category_selection[category_increment] = $(this).val();
					category_increment++;
				}
				
				category_selection.join();
				$('#category_selection_compiled').val(category_selection);
			});
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		$('.season_selection').click( function () {
			var season_selection = new Array();
			var season_increment = 0;
			$('.season_selection').each( function () {
				if($(this).is(":checked")) {
					season_selection[season_increment] = $(this).val();
					season_increment++;
				}
				
				season_selection.join();
				$('#season_selection_compiled').val(season_selection);
			});
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		$('.staff_selection').click( function () {
			var staff_selection = new Array();
			var staff_increment = 0;
			$('.staff_selection').each( function () {
				if($(this).is(":checked")) {
					staff_selection[staff_increment] = $(this).val();
					staff_increment++;
				}
				
				staff_selection.join();
				$('#staff_selection_compiled').val(staff_selection);
			});
		});
		
		/* ------------------------------------------------------------------------- FUNCTION SEPARATOR -----------------------------------------------------------------------------*/
		
		$('.week_selection').click( function () {
			var week_selection = new Array();
			var week_increment = 0;
			$('.week_selection').each( function () {
				if($(this).is(":checked")) {
					week_selection[week_increment] = $(this).val();
					week_increment++;
				}
				
				week_selection.join();
				$('#week_selection_compiled').val(week_selection);
			});
		});
		
		/* -------------------------------------------------------- will log a compiled array values of selected filters - this is for the purpose of saving the results ----------------------------------------------------*/
		
		
		/* -------------------------------------------------------------------------------------- show hide the selection for the filters ------------------------------------------------------------------------------------------- */
		
		$('.module_toggle').click( function () {
			var module_id = $(this).attr('id');
			
			if($('ul#'+module_id).is(':visible')) { $('ul#'+module_id).fadeOut(); } else { $('ul#'+module_id).fadeIn(); }
			return false;
		});
		
		/* -------------------------------------------------------------------------------------- show hide the selection for the filters ------------------------------------------------------------------------------------------- */
		
		
		/* -------------------------------------------------------------------------------- show hide the selection for brand_categories --------------------------------------------------------------------------------------- */
		
		$('.brand_selection_toggle').click( function () {
			var brand_id = $(this).attr('id');
			
			if($('ul#'+brand_id).is(':visible')) { $('ul#'+brand_id).fadeOut(); $(this).html('Expand'); } else { $('ul#'+brand_id).fadeIn(); $(this).html('Hide'); }
			return false;
		});
		
		/* -------------------------------------------------------------------------------- show hide the selection for brand_categories --------------------------------------------------------------------------------------- */
		
		
		
		/* ----------------------------------------- Upon checking/unchecking any filter, this will call an ajax function to return the values for the images ------------------------------------------------------------- */
		
		$('.filter_toggle').click( function () {
			var form_data = $('#image_filter').serialize();
			
			$.ajax({
				async:true,
				data:form_data,
				dataType:'html',
				success:function (data, textStatus) {
					$('#results_holder').html(data);
				},
				type:'post',
				url:"<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/images/image_results"
			});
		});
		
		/* ----------------------------------------- Upon checking/unchecking any filter, this will call an ajax function to return the values for the images ------------------------------------------------------------- */
		
		function generate_result() {
			var form_data = $('#image_filter').serialize();
			
			$.ajax({
				async:true,
				data:form_data,
				dataType:'html',
				success:function (data, textStatus) {
					$('#results_holder').html(data);
				},
				type:'post',
				url:"<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/images/image_results"
			});
		}
	});
</script>