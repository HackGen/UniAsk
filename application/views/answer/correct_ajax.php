<script>
function rating_plus(id){
	var URLs="http://114.35.129.223/UniAsk/receive_rating/plus/"+id;
	$.ajax({
		url:URLs,
		data:$('#rating_plus').serialize(),	
		type:"POST",
		datatype:'text',
		success:function(msg){
		
		}
		
	});
}
function rating_minus(id){
	var URLs="http://114.35.129.223/UniAsk/receive_rating/minus/"+id;
	$.ajax({
		url:URLs,
		data:$('#rating_minus').serialize(),	
		type:"POST",
		datatype:'text',
		success:function(msg){
		
		}
	});
}
function correct(id)
{
	$.ajax({
		url:"http://114.35.129.223/UniAsk/correct/updata/"+id,
		data: $('#send_correct').serialize(),
		type:"POST",
		datatype:'text',
		success:function(msg){
			$("#send_correct_"+id).hide();
		}
	});
}

</script>
