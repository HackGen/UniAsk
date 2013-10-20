<style>
#form_div {
	display: inline-block;	
}

#div {
	text-align: center;
	width: auto;
	margin: 0 auto;
	
}

.question_pic, .question_post {
	float: left;
	margin: 5px;
}

.question_pic img {
	margin-top: 30px;
	height: 70px;
	width: 70px;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

.question_post {
	padding: 5px 10px;
	border: 0px solid #dcdcdc;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
.question_post textarea, .question_post input[type="text"] {
	border: 1px solid #d1d1d1;
	outline: 0;
	padding: 4px 2px;
	height: 80px;
	width: 500px;
	resize: none;
}

.question_post textarea:hover, .question_post textarea:focus, .question_post input[type="text"]:hover, .question_post input[type="text"]:focus {
	border-color: #0bb492;
}

.question_post input[type="submit"] {
	float: right;
	padding: 5px 20px;
	background: #0bb492;
	color: #fff;
	border: 0;
	outline: 0;
	cursor: pointer;
}
	
.question_post input[type="submit"]:hover {
	background: #12bb99;
}
.question_post input[type="submit"]:active {
	background: #0bb492;
}

.toolbar_button {
	padding: 2px 5px;
	background: #fff;
	border: 1px solid #d1d1d1;
	margin: 0px 0px 5px 0px;
}

.toolbar_button:hover, .toolbar_button:focus {
	border-color: #0bb492;
}


}
</style>

<!DOCTYPE html>
<div id="div">
<div id="form_div">
	<div class="question_pic">
		<img src="<?php echo $this->session->userdata('img'); ?>" />
	</div>
	<div class="question_post">
	
		<div id="wysihtml5-toolbar" style="text-align: left; margin-bottom:5px;">
		  <a class="toolbar_button" data-wysihtml5-command="bold"><strong>B</strong></a>
		  <a class="toolbar_button" data-wysihtml5-command="italic"><i>i</i></a>
		  <a class="toolbar_button" data-wysihtml5-command="insertOrderedList">1.</a>
		  <a class="toolbar_button" data-wysihtml5-command="insertUnorderedList">&bull;</a>
		  <a class="toolbar_button" data-wysihtml5-command="createLink">Link</a>
		  
		  <span data-wysihtml5-dialog="createLink" style="display: none;">
			<label>
			  &nbsp; Link:
			  <input data-wysihtml5-dialog-field="href" value="http://" class="text">
			</label>
			<a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
		  </div>
		</span>
	
		<?php echo validation_errors(); ?>
		<?php echo form_open('question/insert/'.$ques_id) ?>
		<form>
			<textarea name="area" id="wysihtml5-textarea" placeholder="幫助他，答覆問題..." autofocus rows="15" cols="55"></textarea>
			<br>
			<input type="submit" name="submit" value="回答" />
		</form>
	</div>

</div>
</div>



	<script>
		var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
  		toolbar:      "wysihtml5-toolbar", // id of toolbar element
  		parserRules:  wysihtml5ParserRules, // defined in parser rules set 
		});
	</script>


