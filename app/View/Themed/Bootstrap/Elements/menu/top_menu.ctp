<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li <?php if($current_page=="index"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Users', array('plugin' => 'acl_management', 'controller' => 'users', 'action' => 'index')); ?>
					</li>
					
					<li class="dropdown  <?php if($this->params['controller'] == "brands" || $this->params['controller'] == "campaigns" || $this->params['controller'] == "cateogries" || $this->params['controller'] == "seasons" || $this->params['controller'] == "staffs" || $this->params['controller'] == "weeks"){echo 'active';} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modules <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="nav-header">Core Module</li>
							<li><a href="<?php echo $this->Html->url('/brands/');?>">Brands</a></li>
							<li><a href="<?php echo $this->Html->url('/campaigns/');?>">Campaigns</a></li>
							<li><a href="<?php echo $this->Html->url('/categories/');?>">Categories</a></li>
							<li><a href="<?php echo $this->Html->url('/seasons/');?>">Seasons</a></li>
							<li><a href="<?php echo $this->Html->url('/staffs/');?>">Staffs</a></li>
							<li><a href="<?php echo $this->Html->url('/weeks/');?>">Weeks</a></li>
						</ul>
					</li>
					
					<li class="dropdown  <?php if($this->params['controller'] == "filters" || $this->params['controller'] == "images"){echo 'active';} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Images <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="nav-header">Image Module</li>
							<li><a href="<?php echo $this->Html->url('/images/add');?>">Create Image</a></li>
							<li><a href="<?php echo $this->Html->url('/images/add');?>">List Images</a></li>
							<li><a href="<?php echo $this->Html->url('/filters/');?>">Saved Filters</a></li>
							<li><a href="<?php echo $this->Html->url('/images/filter');?>">Filter Dashboard</a></li>
						</ul>
					</li>
					
					<li <?php if($current_page=="logout"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>