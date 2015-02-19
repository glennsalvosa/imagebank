<ul id="result_holder">
<?php
	foreach($images as $image) {
		?>
			<li class="image_results">
				<a class="fancybox" href="/img/uploaded/<?php echo $image['Image']['location']; ?>">
					<img src="/img/uploaded/<?php echo $image['Image']['location']; ?>">
				</a>
				
				<div class="cart_action_holder">
					<div class="right" style="margin-top: 5px;">
						<a class="emailItem" id="emailItem_<?php echo $image['Image']['id']; ?>" title="Email this image" href="#"><img src="/img/07.png" style="width: 15px;"></a>
						<?php
							if(in_array( $image['Image']['id'], $_SESSION['image_cart'])) {
								?>
									<a class="removeCart" id="removeCart_<?php echo $image['Image']['id']; ?>" title="Remove from cart" href="#"><img src="/img/15.png" style="width: 15px;"></a>
									<a style="display:none;" class="addCart" id="addCart_<?php echo $image['Image']['id']; ?>" title="Add to cart" href="#"><img src="/img/16.png" style="width: 15px;"></a>
								<?php
							} else {
								?>
									<a style="display:none;" class="removeCart" id="removeCart_<?php echo $image['Image']['id']; ?>" title="Remove from cart" href="#"><img src="/img/15.png" style="width: 15px;"></a>
									<a class="addCart" id="addCart_<?php echo $image['Image']['id']; ?>" title="Add to cart" href="#"><img src="/img/16.png" style="width: 15px;"></a>
								<?php
							}
						?>
					</div>
				</div>
			</li>
		<?php
	}
?>
</ul>

<?php if(count($images) > 10) { ?>
	<div class="left span12 paging_holder">
		<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
<?php } ?>