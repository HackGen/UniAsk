<style>
#view_div {
	margin: 5px;
	width: 390px;
	display: inline-block;
	text-align: left;
	padding: 10px;
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

.view_post .tag1 {
	background: #9cb0d8;
	padding: 2px 5px;
	font-size: 10px;
}

.view_post .tag2 {
	background: #d9e7fe;
	padding: 2px 5px;
	font-size: 10px;
}

.view_post_link {
	font-size: 15px;
	line-height: 25px;
}



</style>

<div id="div">
	<?php foreach ($question as $questions): 
		$user = $this->question_model->get_user($questions['user_id']);
		$count_answer = $this->search_model->get_count_answer($questions['question_id']);
	?>

		<div id="view_div">
			<div class="view_post">
				<span class="tag1"><a href='search/get/<?php echo $questions['catalog_school']; ?>'><?php echo $questions['catalog_school']; ?></a></span>
				<span class="tag2"><a href='search/get/<?php echo $questions['catalog_detail']; ?>'><?php echo $questions['catalog_detail']; ?></a></span><br/>
				<a class="view_post_link" href = 'http://114.35.129.223/UniAsk/question/view/<?php echo $questions['question_id'] ; ?>' ><?php echo $questions['content'] ?></a><br/>
				by <strong><?php echo $user['name'];?>&nbsp;|&nbsp;<?php echo date("M d Y",$questions['date']);?></strong>
				<span class="date"><strong><?php echo $count_answer;?></strong> 回答</span>
			</div>
		</div>
	
		<!--
		<div id="view_div">
			<div class="view_pic">
				<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
			</div>
			<div class="view_post">
				<strong><?php echo $user['name'];?> 問:</strong><br/>
				<a href = 'http://114.35.129.223/UniAsk/question/view/<?php echo $questions['question_id'] ; ?>' ><?php echo $questions['content']; ?> </a>
				<span class="date"><?php echo date("M d Y",$questions['date']);?></span>
			</div>
		</div>
		-->
		
	<?php endforeach ?>
</div>

