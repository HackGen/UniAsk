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

.view_pic, .view_post {
	float: left;
	margin: 5px;

}

.view_post {
	padding: 5px 10px;
}

.view_post .date {
	position :absolute;
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

<div>
	<?php 
		$i = 0;
		foreach ($question as $questions): 
		if($i >= 5) break;
		$i++;
		$user = $this->question_model->get_user($questions['user_id']);
		$count_answer = $this->search_model->get_count_answer($questions['question_id']);
	?>
	
		<div id="view_div">
			<div class="view_post">
				<span class="tag1"><a href='search/get/<?php echo $questions['catalog_school']; ?>'><?php echo $questions['catalog_school']; ?></a></span>
				<span class="tag2"><a href='search/get/<?php echo $questions['catalog_detail']; ?>'><?php echo $questions['catalog_detail']; ?></a></span><br/>
				<a class="view_post_link" href = 'http://114.35.129.223/UniAsk/question/view/<?php echo $questions['question_id'] ; ?>' ><?php echo $questions['content'] ?></a><br/>
				<div class="user">by <strong><?php echo $user['name'];?></strong>&nbsp;|&nbsp;<?php echo date("M d Y",$questions['date']);?></div>
				<span class="date"><strong><?php echo $count_answer;?></strong> ЕЊТа</span>
			</div>
		</div>
		<div style="clear:both;"></div>
	<?php endforeach ?>
</div>


