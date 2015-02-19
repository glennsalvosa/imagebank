<style>
	#image_cart { margin: 0; }
	body { padding: 0px; }
</style>

<h3>Cart Items</h3>

<ul id="image_cart" style="list-style: none;" class="left full">
	<?php
		foreach($images as $image) {
			?>
				<li class="cart_image_results left full contained" id="removeCart_<?php echo $image['Image']['id']; ?>">
					<div class="cart_item_holder left full" style="height: 100px;">
						<div class="span3 left">
							<img src="/img/uploaded/<?php echo $image['Image']['location']; ?>" style="height: 100%;">
						</div>
						
						<div class="left span3">
							<?php echo $image['Image']['name']; ?>
						</div>
						
						<div class="left span3">
							<?php echo $image['Image']['description']; ?>
						</div>
						
						<div class="left span3">
							<input id="removeCart_<?php echo $image['Image']['id']; ?>" type="button" class="btn btn-danger right removeCart cart_remove_button" value="Remove">
						</div>
					</div>
				</li>
			<?php
		}
	?>
</ul>

<div id="cart_action_holder">
	<a href="/images/download_cart_items"><input type="button" class="btn btn-primary" value="DOWNLOAD"></a>
	<input type="button" class="btn btn-warning" value="EMAIL">
</div>

<script>
	$(document).ready( function () {
		$(document).on("click", ".removeCart", function () {
			var image_id = $(this).attr('id');
			var orig_id = image_id;
			image_id = image_id.split("_");
			
			$.ajax({
				async:true,
				dataType:'html',
				success:function (data, textStatus) {					
					window.parent.document.getElementById('curent_item_count').innerHTML = data;
					window.parent.jQuery('#removeCart_'+image_id[1]).hide();
					window.parent.jQuery('#addCart_'+image_id[1]).show();
					alert('Item was succesfully removed');
					$('li#'+orig_id).fadeOut();
				},
				type:'post',
				url:"<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/images/remove_from_cart/"+image_id[1]
			});
			
			return false;
		});
	});
</script>