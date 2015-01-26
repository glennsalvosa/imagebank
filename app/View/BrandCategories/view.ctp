<div class="brandCategories view container">
<h2><?php echo __('Brand Category'); ?></h2>
	<table>
		
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($brandCategory['BrandCategory']['id']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Category'); ?></td>
			<td>
				<?php echo h($brandCategory['BrandCategory']['category']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Brand'); ?></td>
			<td>
				<?php echo $this->Html->link($brandCategory['Brand']['brand'], array('controller' => 'brands', 'action' => 'view', $brandCategory['Brand']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Description'); ?></td>
			<td>
				<?php echo h($brandCategory['BrandCategory']['description']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($brandCategory['BrandCategory']['created']); ?>
				&nbsp;
			</td>
		<tr>
		
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($brandCategory['BrandCategory']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($brandCategory['BrandCategory']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brand Category'), array('action' => 'edit', $brandCategory['BrandCategory']['id']), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brand Category'), array('action' => 'delete', $brandCategory['BrandCategory']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $brandCategory['BrandCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brand Categories'), array('action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand Category'), array('action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
</div>
