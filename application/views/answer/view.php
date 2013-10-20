<div id="div">
	<div id="view_div">
		<div class="view_pic">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
		</div>
		<div class="view_post">
			<strong><?php echo $name;?> 回答:</strong><br/>
			<?php echo $content; ?>
			<div id="rating_plus">
				<button onClick="rating(<?php echo $answer_id;?>)">+</button>
				<button onClick="rating(<?php echo $answer_id;?>)">-</button>
			</div>
			<?php 
			if($correct == '0' && $logged_in == $question['user_id']){
				echo '<div id = "send_correct_'.$answer_id.'">';
				echo '<button id = "correct_b'.$answer_id.'" onClick="correct('.$answer_id.')">Correct!</button>';
				echo '</div>"';
			}
			?>
			<span><?php echo date("M d Y",$date);?></span>
		</div>
	</div>
</div>

