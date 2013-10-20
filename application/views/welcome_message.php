<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf8" />
	<title>UniAsk :: 由你問大學</title>
	<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/ico">
	<link rel="stylesheet" type="text/css" href="assets/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/jqwidgets/styles/jqx.base.css" />
	<link rel="stylesheet" type="text/css" href="assets/jqwidgets/styles/jqx.custom.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="assets/jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="assets/jqwidgets/jqxwindow.js"></script>
	<script type="text/javascript" src="assets/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="assets/jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="assets/jqwidgets/jqxlistbox.js"></script>
	<script type="text/javascript" src="assets/jqwidgets/jqxdropdownlist.js"></script>
	<script>
		$(document).ready(function() {
			$("#jqxwindow").jqxWindow({
				height: 220,
				width: 750,
				theme: 'base',
				autoOpen: false,
				draggable: true,
				resizable: false,
				isModal: true,
				modalOpacity: 0.3
			});
<?php
			if($logged_in == TRUE) {
			echo '$("#windowButton").jqxButton({theme: "custom", width: 100});';
			echo '$("#windowButton").click(function() {';
			echo '$("#jqxwindow").jqxWindow("open");';
			echo '})';
			}
?>
		}); 
	</script>

	<style>
		.container_header {
			color: #0bb492;
			font-size: 30px;
			font-weight: bold;
		}
	</style>
</head>
<body>
<div id="jqxwindow">
	<?php
		if($logged_in==TRUE) {
			echo "<div id='question_create_button'>發問</div>";
			echo "<div id='question_create_div'>";
			
			$this->load->view('question/create');
			echo "</div>";
		}
	?>

</div>
<header>
	<div class="header_logo"><a href="">UNIASK</a></div>
	<div class="header_login">
		<?php
			if($logged_in==TRUE) {
				echo "<img src=".$this->session->userdata('img')." height='35px' title=".$this->session->userdata('name')." />";
				echo "<a href='logout' class='logout'>登出</a>";
        	}
        	else {
        		echo "<a href='login' class='login'>FB 登入</a>";
        	}
		?>
	
	
		
	</div>
</header>

<div id="container">
	<div id="search_div">
		<?php $this->load->view('search/index'); ?>
	</div>
	
	<div id="div">
		<div id="form_div">
			<div id="hot_question_field">
				<div class='container_title2' style='margin:20px;'>熱門問題</div>
				<?php
					$data['question'] = $this->question_model->get_hot_question();
					$this->load->view('question/hot', $data);
				?>
			</div>


			<div id="latest_question_field">
				<div class='container_title' style='margin:20px;'>最新問題</div>
				<?php
					$data['question'] = $this->question_model->get_question();
					$this->load->view('question/hot', $data);
				?>
			</div>
		</div>
	</div>
	
	
</div>

<footer>
	UniAsk Copyright © 2013 by RTCG, Taiwan R.O.C.<br/>
	<a href="http://github.com/HackGen/UniAsk" target="_blank">Contact Us</a>
</footer>

</body>
</html>
