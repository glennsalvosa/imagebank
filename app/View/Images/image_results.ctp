<ul id="result_holder">
<?php
	foreach($images as $image) {
		?>
			<li class="image_results">
				<img src="/img/uploaded/<?php echo $image['Image']['location']; ?>">
				<div class="right">
					<a title="Add to cart" href="#">a</a>
					<a title="Remove from cart" href="#">x</a>
				</div>
			</li>
		<?php
	}
?>
</ul>

<?php if(count($images) > 0) { ?>
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