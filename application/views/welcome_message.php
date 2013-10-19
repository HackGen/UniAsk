<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf8" />
	<title>UniAsk :: 由你問大學</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css" media="screen" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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

<footer>
	2013 Uniask
</footer>

</body>
</html>
