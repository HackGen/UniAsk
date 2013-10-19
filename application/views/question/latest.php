<style>
#view_div {
	margin: 5px;
	width: 240px;
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

.view_post {
	padding: 5px 10px;
}

.view_post .date {
	position :absolute;
	right: 20px;
}

.view_post .tag {
	border: 1px solid #9cb0d8;
	background: #d9e7fe;
}

</style>

<div id="div">
	<?php 
		$i = 0;
		foreach ($question as $questions): 
		if($i >= 5) break;
		$i++;
		$user = $this->question_model->get_user($questions['user_id']);
	?>
	
		<div id="view_div">
			<div class="view_post">
				<span class="tag"><?php echo $questions['catalog_school'] ?></span>
				<span class="tag"><?php echo $questions['catalog_detail'] ?></span>
				<?php echo $questions['content'] ?><br/>
				by <strong><?php echo $user['name'];?></strong><span class="date"><?php echo date("M d Y",$questions['date']);?></span>
			</div>
		</div>
		<div style="clear:both;"></div>
	<?php endforeach ?>
</div>


