<script>
var rating=function(){
	var URLs="<?php echo base_url(); ?>/application/controllers/receive_rating.php/plus/<?php echo $answer_id;?>"
$.ajax({
	url:URLs,
	data:$('#rating_plus').serialize(),	
	type:"POST",
	datatype:'text',
	success:function(msg){
		alert(msh);
	}
	error:function(xhr,ajaxOptions,thrownError){
		alert(xhr.status);
		alert(thrownError);
	}
});
}
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


	<div id="div">
	<div id="view_div">
		<div class="view_pic">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
		</div>
		<div class="view_post">
			<strong><?php echo $name;?> 回答:</strong><br/>
			<?php echo $content; ?>
			<form id="rating_plus">
				<input type="button" name="rating_plus" value="+" onClick="rating()/>
				<input type="button" name="rating_plus" value="-" onClick="rating()/>
			</form>
			<form id = "send_correct">
			<input type="button" vlaue="it is correct!" onClick="Submit()"/>
			</form>

			<span><?php echo date("M d Y",$date);?></span>
		</div>
	</div>
</div>

