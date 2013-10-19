<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf8" />
	<title>UniAsk :: 由你問大學</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css" media="screen" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<<<<<<< HEAD
	<script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxwindow.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxpanel.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxtabs.js"></script>
	<script type="text/javascript" src="../../jqwidgets/jqxcheckbox.js"></script>
<script>
function createWindow() {
	$("#window").jqxWindow({
		height: 300,
		width: 600,
		resizable: false,
		isModal: trye,
		autoOpen: false,
		modalOpacity: 0.3
	});
}
$(document).ready(function() {
	windowButton.click(function(event) {
		$("#window").jqxWindow("open");
	});
});
	</script>

	<style>
		.container_header {
			color: #0bb492;
			font-size: 30px;
			font-weight: bold;
		}

		#hot_question_field {
		}
		#latest_question_field {
		}
	</style>
=======
>>>>>>> 773f2a68618c671cbb2e4b4fb567d2286ae21666
</head>
<body>

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
	
	
	<?php
		if($logged_in==TRUE) {
			echo "<div id='question_create_button'>發問</div>";
			echo "<div id='question_create_div'>";
			
			$this->load->view('question/create');
			echo "</div>";
		}
		//echo "<div id='question_create_button' style='margin:20px;'>最新問題</div>";
		//$data['question'] = $this->question_model->get_question();
		//$this->load->view('question/all', $data);
	?>

	<div id="div">
		<div id="form_div">
			<div id="hot_question_field">
				<div class='container_title' style='margin:20px;'>熱門問題</div>
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
	2013 Uniask
</footer>

</body>
</html>
