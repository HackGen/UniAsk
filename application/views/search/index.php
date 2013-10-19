<style>
#form_div {

}

#div {
	text-align: center;
	width: auto;
	margin: 0 auto;
	
}

#search {
	display: inline-block;
	text-align: left;
	padding: 20px;
	
}


#search input[type="text"] {
    background: url("http://www.cjies.com/etop/images/search-white.png") no-repeat 10px 10px #fff;
    border: 1px solid #d1d1d1;
    color: #333;
	font-size: 16px;
    width: 400px;
    padding: 8px 15px 8px 35px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-transition: all 0.20s ease-in-out;
  	-moz-transition: all 0.20s ease-in-out;
  	-ms-transition: all 0.20s ease-in-out;
  	-o-transition: all 0.20s ease-in-out;
}

#search input[type="text"]:focus {
    color: #333;
    outline: none;
    border-color: #aaa;
}

</style>

<div id="div">
	<div id="search">
		<input type="text" id="search_text" placeholder="Search..." />
	</div>
</div>

<script>
$( document ).ready(function() {
	$('#search_text').keypress(function (e) {
	  if (e.which == 13) {
		if($(this).val() && $(this).val()!=" ") {
			window.location = 'search/get/'+$(this).val();
		}
	  }
	});
});

</script>
