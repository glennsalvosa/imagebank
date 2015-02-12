<div class="container">
	<form method="POST">
		<fieldset>
			<label id="brand_option_toggle">Brands</label>
			<ul class="options_toggle" id="brand_option_toggle">
				<?php
					foreach($brands as $brand_key => $brand) {
						?>
							<li>
								<label><input type="checkbox" class="brand_selection filter_toggle" name="data[Brand][id][]" value="<?php echo $brand['Brand']['id']; ?>"> <?php echo $brand['Brand']['brand']; ?></label>
								<ul class="brand_category brand_category_selection">
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
			<label>Campaigns</label>
			<ul class="options_toggle">
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
			<label>Categories</label>
			<ul class="options_toggle">
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
			<label>Seasons</label>
			<ul class="options_toggle">
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
			<label>Staffs</label>
			<ul class="options_toggle">
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
			<label>Week</label>
			<ul class="options_toggle">
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
</div>