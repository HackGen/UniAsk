<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/style.css" media="screen" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/assets/wysihtml5/parser_rules/advanced.js"></script>
	<script src="/assets/wysihtml5/dist/wysihtml5-0.3.0.min.js"></script>
	<script>
		var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
  		toolbar:      "wysihtml5-toolbar", // id of toolbar element
  		parserRules:  wysihtml5ParserRules // defined in parser rules set 
		});
	</script>
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
