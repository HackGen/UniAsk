<style>
#view_div {
	margin: 20px;
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

.view_post {
	float: left;
	padding: 5px 10px;
}

.view_post img {
	-moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
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

.title {
	font-size: 22px;
	line-height: 28px;
}

.user {
	margin-top: 25px;

}

.completed {
	position: absolute;
	bottom: 20px;
	right: 20px;	
}

.completed_button {
	padding: 5px 20px;
	border: 0px;
	outline: 0;
	background: #3f86ca;
	color: #fff;
	text-decoration: none;
	cursor: pointer;	
}

.completed_button:hover {
	background: #2f73b4;
}

.completed_button:active {
	background: #23609b;
}

</style>
<script>
function complete(id) {
	var URL = "http://114.35.129.223/UniAsk/question/complete/"+id;
	$.ajax({
		url: URL,
		type:"POST",
		datatype:'text',
		success:function(msg){
			document.location.reload();
		}
		
	});
}
</script>
<div id="div">
	<div id="view_div">

		<div class="view_post">
			<span class="title">
				<span class="tag1"><a href='http://114.35.129.223/UniAsk/search/get/<?php echo $question['catalog_school']; ?>'><?php echo $question['catalog_school']; ?></a></span>
				<span class="tag2"><a href='http://114.35.129.223/UniAsk/search/get/<?php echo $question['catalog_detail']; ?>'><?php echo $question['catalog_detail']; ?></a></span><br/>
				<?php echo $question['content']; ?>&nbsp;
				<?php if($question['completed'] == 1) echo "<img src='http://www.cjies.com/uniask/completed.png' height='15px' title='已完成'/>"; ?>
			</span>
			<div class="user"><img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" height="16px"/> <strong><?php echo $user['name'];?></strong> | <?php echo date("M d Y",$question['date']);?></div>
			<div class="completed">
				<?php
					if($question['completed'] == 0 && $logged_in == $question['user_id']) {
						echo '<button class="completed_button" onclick="complete('.$question['question_id'].')">已有正確答案</button>';
					}
				?>
			</div>
		</div>
	</div>
</div>

