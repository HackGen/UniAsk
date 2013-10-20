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
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

.title {
	font-size: 22px;
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
			<span class="title"><?php echo $question['content']; ?></span>
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

