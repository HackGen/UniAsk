﻿<style>
#form_div {
	display: inline-block;
}

#div {
	text-align: center;
	width: auto;
	margin: 0 auto;
	
}

#search {
	display: inline-block;
	text-align: center;
	margin-top: 50px;
	color: #fff;
}

#search h1 {
	font-size: 45px;
}

#search input[type="text"] {
    background: url("http://www.cjies.com/etop/images/search-white.png") no-repeat 12px 15px #fff;
    border: 3px solid #aaa;
    color: #333;
	font-size: 20px;
	text-align: left;
    width: 600px;
    padding: 9px 15px 10px 35px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
	-moz-box-shadow: 0 0 8px #999;
	-webkit-box-shadow: 0 0 8px#999;
	box-shadow: 0 0 8px #999;
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

.question_create_button {

	background: #12bb99;
    	font-size: 30px;
    	font-weight: bold;
	color: #fff;
	padding: 8px 20px;

}

</style>

<div id="div">
	<div id="search">
		<h1>UNIASK</h1>
		<input type="text" id="search_text2" placeholder="搜尋你覺得困擾的問題..." />
		<br/><br/>
		例子: 交通大學 假單 | 如何繳費? | 獎學金
		<br/><br/>
		OR<br/><br/>
		<?php if($logged_in == TRUE) {
		echo '	<button id="windowButton" class="question_create_button">發問</button>';
		}
		?>
	</div>
</div>

<script>
$( document ).ready(function() {
	$('#search_text2').keypress(function (e) {
	  if (e.which == 13) {
		if($(this).val() && $(this).val()!=" ") {
			window.location = 'search/get/'+$(this).val();
		}
	  }
	});
});

</script>
