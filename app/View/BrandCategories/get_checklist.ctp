<h4>Brand Categories</h4>

<ul style="list-style: none;">
	<?php
		foreach($brand_categories as $key => $brand_category) {
			?>
				<li>
					<label><input type="checkbox" name="data[BrandCategory][BrandCategory][]" value="<?php echo $key; ?>"> <?php echo $brand_category; ?></label>
				</li>
			<?php
		}
	?>
</ul>