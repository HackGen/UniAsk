<script>
	var currect<?php echo $answer_id;?>=function()
	{
		$/ajax({
			url:"application/controllers/correct.php/updata/<?php echo $answer_id;?>" ,
			data: $(send_correct).serialize(),
			type:"POST",
			datatype:'text',

		})
	}


</script>
<form id = "send_correct">
<input type="button" vlaue="it is correct!" onClick="Submit()"/>

</form>
<div id="div">
	<div id="view_div">
		<div class="view_pic">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
		</div>
		<div class="view_post">
			<strong><?php echo $name;?> 回答:</strong><br/>
			<?php echo $content; ?>
			<span><?php echo date("M d Y",$date);?></span>
		</div>
	</div>
</div>

