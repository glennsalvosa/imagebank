<div class="userProfiles view container">
<h2><?php echo __('User Profile'); ?></h2>
	<table>
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['id']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Firstname'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['firstname']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Middlename'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['middlename']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Lastname'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['lastname']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Company Name'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['company_name']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Street'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['street']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('City'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['city']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Country'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['country']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Email Atdress'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['email_atdress']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Mobile Number'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['mobile_number']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Land Line Nuber'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['land_line_nuber']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Office Number'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['office_number']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Position'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['position']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Gender'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['gender']); ?>
				&nbsp;
			</td>
		</tr>

		<tr>		
			<td><?php echo __('Civil Status'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['civil_status']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('User'); ?></td>
			<td>
				<?php echo $this->Html->link($userProfile['User']['name'], array('controller' => 'users', 'action' => 'view', $userProfile['User']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Created'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['created']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Modified'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['modified']); ?>
				&nbsp;
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Status'); ?></td>
			<td>
				<?php echo h($userProfile['UserProfile']['status']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions container">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Profile'), array('action' => 'edit', $userProfile['UserProfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Profile'), array('action' => 'delete', $userProfile['UserProfile']['id']), array(), __('Are you sure you want to delete # %s?', $userProfile['UserProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Profile'), array('action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'atd')); ?> </li>
	</ul>
</div>
