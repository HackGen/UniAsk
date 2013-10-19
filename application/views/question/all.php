<style>
#view_div {
	margin: 5px;
	width: 800px;
	display: inline-block;
	text-align: left;
	padding: 20px;
	background: #fff;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	position: relative;
}

#div {
	text-align: center;
	width: auto;
	margin: 0 auto;
	
}

.view_pic, .view_post {
	float: left;
	margin: 5px;

}

.view_pic img {
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

.view_post {
	padding: 5px 10px;
}

.view_post .date {
	position :absolute;
	bottom: 15px;
	right: 20px;
}

</style>

<div id="div">
	<?php foreach ($question as $questions): 
		$user = $this->question_model->get_user($questions['user_id']);
	?>
	
		<div id="view_div">
			<div class="view_pic">
				<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
			</div>
			<div class="view_post">
				<strong><?php echo $user['name'];?> 問:</strong><br/>
<<<<<<< HEAD
				<a href = 'http://114.35.129.223/UniAsk/answer/view/<?php echo $questions -> question_id ; ?>' ><?php echo $questions['content']; ?> </a>
=======
				<a href = 'http://114.35.129.223/UniAsk/answer/view/<?php echo $questions['question_id'] ; ?>' ><?php echo $questions['content']; ?> </a>
>>>>>>> parent of f30c02d... test
				<!--<?php echo $questions['content']; ?>-->
				<span class="date"><?php echo date("M d Y",$questions['date']);?></span>
			</div>
		</div>
		<div style="clear:both;"></div>
	<?php endforeach ?>
</div>

