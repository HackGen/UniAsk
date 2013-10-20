<style>
#view_div2 {
	margin: 10px;
	width: 640px;
	min-height: 150px;
	display: inline-block;
	text-align: left;
	padding: 20px;
	background: #fff;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	position: relative;
}

.rating {
	position: absolute;
	top: 20px;
	right: 20px;
	text-align: center;
}

.correct {
	position: absolute;
	bottom: 20px;
	right: 20px;
}

.rating_plus, .rating_minus {
	border: 0;
	outline: 0;
	color: #fff;
	background: #12bb99;
	padding: 5px 10px;
}

.rating_minus {
	background: #da4839;
}

</style>

<div id="div">
	<div id="view_div2">
	
		<div class="view_post">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" height="15px"/> <strong><?php echo $name;?></strong> | <?php echo date("M d Y",$date);?> <?php if($correct == 1) echo "<img src='http://www.cjies.com/uniask/completed.png' height='15px' title='這是正確答案'/>"; ?>
			<br/><br/>
			<div class="title"><?php echo $content; ?></div>
			
			<div class="rating">
				<div id="rating_plus" style="float:left;">
					<button class="rating_plus" onClick="rating_plus(<?php echo $answer_id;?>)">+</button>
					<div id="number_plus"><?php echo $rating_plus; ?></div>
				</div>
				
				<div id ="rating_minus" style="float:left;">
					<button class="rating_minus" onClick="rating_minus(<?php echo $answer_id;?>)">-</button>
					<div id="number_minus"><?php echo $rating_minus; ?></div>
				</div>
			</div>
			
			<div class="correct">
				<?php 
				if($correct == '0' && $logged_in == $question['user_id']){
					echo '<div id = "send_correct_'.$answer_id.'">';
					echo '<button class="completed_button" id = "correct_b'.$answer_id.'" onClick="correct('.$answer_id.')">正確答案</button>';
					echo '</div>';
				}
				?>
			</div>

		</div>
	</div>
</div>

