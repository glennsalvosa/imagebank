<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<?php
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('overwrite');
		?>
	</head>
	<body>
		<?php echo $this->fetch('content'); ?>
	</body>
</html>