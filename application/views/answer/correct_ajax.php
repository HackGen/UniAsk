<script>
function rating(id){
	var URLs="http://114.35.129.223/UniAsk/receive_rating/plus/"+id;
	$.ajax({
		url:URLs,
		data:$('#rating_plus').serialize(),	
		type:"POST",
		datatype:'text',
		success:function(msg){
			alert(msg);
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
			alert(msg);
		}
	});
}

</script>