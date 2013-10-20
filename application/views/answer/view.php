<script>
function rating(){
	var URLs="http://114.35.129.223/UniAsk/receive_rating/plus/<?php echo $answer_id;?>"
	$.ajax({
		url:URLs,
		data:$('#rating_plus').serialize(),	
		type:"POST",
		datatype:'text',
		success:function(msg){
			alert(msg);
		}
		error:function(xhr,ajaxOptions,thrownError){
			alert(xhr.status);
			alert(thrownError);
		}
	});
}
function currect<?php echo $answer_id;?>()
{
	$.ajax({
		url:"http://114.35.129.223/UniAsk/correct/updata/<?php echo $answer_id;?>" ,
		data: $('#send_correct').serialize(),
		type:"POST",
		datatype:'text',
		success:function(msg){
			alert(msg);
		}
	});
}

</script>


<div id="div">
	<div id="view_div">
		<div class="view_pic">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
		</div>
		<div class="view_post">
			<strong><?php echo $name;?> 回答:</strong><br/>
			<?php echo $content; ?>
			<form id="rating_plus">
				<button onClick="rating()">+</button>
				<button onClick="rating()">-</button>
			</form>
			<form id = "send_correct">
			<button onClick="correct<?php echo $answer_id;?>()">Correct!</button>
			</form>

			<span><?php echo date("M d Y",$date);?></span>
		</div>
	</div>
</div>

