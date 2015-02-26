<ul id="result_holder">
<?php
	foreach($images as $image) {
		?>
			<li class="image_results">
				<a class="fancybox" href="/img/uploaded/<?php echo $image['Image']['location']; ?>">
					<img border="0" src="/phpthumb/phpThumb.php?src=http://<?php echo $_SERVER['SERVER_NAME']; ?>/img/uploaded/<?php echo $image['Image']['location']; ?>&w=120&bg=FFFFFF" alt="">
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
				
				<div class="mailerForm" id="mailerForm_<?php echo $image['Image']['id']; ?>">
					<form style="margin: 0;" class="mailerAjaxForm" method="post" action="/images/instance_sender"  id="mailerForm_<?php echo $image['Image']['id']; ?>" >
						<fieldset>
							<legend>Send VIA Email</legend>
							<label>Email Addresses<br /><small><i>Seperate recipients with comma</i></small></label>
							<textarea name="recipients" placeholder="Enter recipients here"></textarea>
							<input type="hidden" name="image_id" value="<?php echo $image['Image']['id']; ?>">
							<input type="submit" value="SEND" class="btn btn-primary">
							<input type="button" value="CLOSE" class="btn btn-danger closeMailer" id="closeMailer_<?php echo $image['Image']['id']; ?>">
						</fieldset>
					</form>
				</div>
			</li>
		<?php
	}
?>
</ul>

<div class="left span12 paging_holder">
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('PREV'), array(), null, array('class' => 'prev disabled paging_link'));
			echo $this->Paginator->numbers(array('separator' => '', 'class' => 'paging_link'));
			echo $this->Paginator->next(__('NEXT') . ' >', array(), null, array('class' => 'next disabled paging_link'));
		?>
	</div>
</div>