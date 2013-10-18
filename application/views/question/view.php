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
	<div id="view_div">
		<div class="view_pic">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
		</div>
		<div class="view_post">
			<strong><?php echo $user['name'];?> 問:</strong><br/>
			<a herf = 'http://114.35.129.223/UniAsk/answer/view/<?php echo $ques_id; ?>' ><?php echo $question['content']; ?> </a>
			<span class="date"><?php echo date("M d Y",$question['date']);?></span>
		</div>
	</div>
</div>

