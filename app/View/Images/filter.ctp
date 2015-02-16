<div class="container">
	<form id="image_filter" method="POST">
		<fieldset>
			<label id="brand_option_toggle" class="module_toggle">Brands</label>
			<ul class="options_toggle" id="brand_option_toggle">
				<?php
					foreach($brands as $brand_key => $brand) {
						?>
							<li>
								<label><input type="checkbox" class="brand_selection filter_toggle" name="data[Brand][id][]" value="<?php echo $brand['Brand']['id']; ?>"> <?php echo $brand['Brand']['brand']; ?><?php if(count($brand['BrandCategory']) > 0) { ?>&nbsp;<a href="#" class="left brand_selection_toggle" id="brand_selection_<?php echo $brand['Brand']['id']; ?>">Expand</a><?php } ?></label>
								<ul class="brand_category brand_category_selection" id="brand_selection_<?php echo $brand['Brand']['id']; ?>">
									<?php foreach($brand['BrandCategory'] as $brand_category) { ?>
										<li>
											<label>
												<input type="checkbox" class="brand_category_selection filter_toggle" name="data[BrandCategory][id][]" value="<?php echo $brand_category['id']; ?>"> <?php echo $brand_category['category']; ?>
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
			<ul class="options_toggle" id="campaign_option_toggle">
				<?php
					foreach($campaigns as $campaign_key => $campaign) {
						?>
							<li><label><input type="checkbox" class="campaign_selection filter_toggle" name="data[Campaign][id][]" value="<?php echo $campaign_key; ?>"> <?php echo $campaign; ?></label></li>
						<?php
					}
				?>
			</ul>
		</fieldset>
		
		<fieldset>
			<label id="category_option_toggle" class="module_toggle">Categories</label>
			<ul class="options_toggle" id="category_option_toggle">
				<?php
					foreach($categories as $category_key => $category) {
						?>
							<li><label><input type="checkbox" class="category_selection filter_toggle" name="data[Category][id][]" value="<?php echo $category_key; ?>"> <?php echo $category; ?></label></li>
						<?php
					}
				?>
			</ul>
		</fieldset>
		
		
		<fieldset>
			<label id="season_option_toggle" class="module_toggle">Seasons</label>
			<ul class="options_toggle" id="season_option_toggle">
				<?php
					foreach($seasons as $season_key => $season) {
						?>
							<li><label><input type="checkbox" class="season_selection filter_toggle" name="data[Season][id][]" value="<?php echo $season_key; ?>"> <?php echo $season; ?></label></li>
						<?php
					}
				?>
			</ul>
		</fieldset>
		
		<fiedset>
			<label id="staff_option_toggle" class="module_toggle">Staffs</label>
			<ul class="options_toggle" id="staff_option_toggle">
				<?php
					foreach($staffs as $staff_key => $staff) {
						?>
							<li><label><input type="checkbox" class="staff_selection filter_toggle" name="data[Staff][id][]" value="<?php echo $staff_key; ?>"> <?php echo $staff; ?></label></li>
						<?php
					}
				?>
			</ul>
		</fieldset>
		
		<fiedset>
			<label id="week_option_toggle" class="module_toggle">Week</label>
			<ul class="options_toggle" id="week_option_toggle">
				<?php
					foreach($weeks as $week_key => $week) {
						?>
							<li><label><input type="checkbox" class="week_selection filter_toggle" name="data[Week][id][]" value="<?php echo $week_key; ?>"> <?php echo $week; ?></label></li>
						<?php
					}
				?>
			</ul>
		</fieldset>
		
		<input type="submit" value="Submit">
	</form>
	
	<div id="results_holder"></div>
</div>

<div class="hidden">
	<form method="post" id="filter_form">
		<input name="data[Images][Brand][Brand]" type="text" id="brand_selection_compiled">
		<input name="data[Images][BrandCategory][BrandCategory]" type="text" id="brand_category_selection_compiled">
		<input name="data[Images][Campaign][Campaign]" type="text" id="campaign_selection_compiled">
		<input name="data[Images][Category][Category]" type="text" id="category_selection_compiled">
		<input name="data[Images][Season][Season]" type="text" id="season_selection_compiled">
		<input name="data[Images][Staff][Staff]" type="text" id="staff_selection_compiled">
		<input name="data[Images][Week][Week]" type="text" id="week_selection_compiled">
	</form>
</div>

<script>
	$(document).ready( function () {
		
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
		
		$('.module_toggle').click( function () {
			var module_id = $(this).attr('id');
			
			if($('ul#'+module_id).is(':visible')) { $('ul#'+module_id).fadeOut(); } else { $('ul#'+module_id).fadeIn(); }
			return false;
		});
		
		$('.brand_selection_toggle').click( function () {
			var brand_id = $(this).attr('id');
			
			if($('ul#'+brand_id).is(':visible')) { $('ul#'+brand_id).fadeOut(); } else { $('ul#'+brand_id).fadeIn(); }
			return false;
		});
		
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
	});
</script>