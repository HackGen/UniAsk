<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/style.css" media="screen" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/wysihtml5/parser_rules/advanced.js"></script>
	<script src="<?php echo base_url(); ?>/assets/wysihtml5/dist/wysihtml5-0.3.0.min.js"></script>
	<link rel="stylesheet" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
    	<link rel="stylesheet" href="css/stylesheet.css">
	
</head>
<body>
	
	<header>
	<div class="header_logo"><a href="<?php echo base_url(); ?>">UNIASK</a></div>
	<div class="header_login">
		<?php
			if($logged_in==TRUE) {
				echo "<img src=".$this->session->userdata('img')." height='35px' title=".$this->session->userdata('name')." />";
				echo "<a href='".base_url()."index.php/logout' class='logout'>登出</a>";
        	}
        	else {
        		echo "<a href='".base_url()."login' class='login'>FB 登入</a>";
        	}
		?>
	
	
		
	</div>
</header>
