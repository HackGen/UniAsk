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
	margin-top: 35px;
	height: 50px;
	width: 50px;
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
.question_post textarea {
	border: 1px solid #d1d1d1;
	outline: 0;
	padding: 4px 2px;
	height: 80px;
	width: 500px;
	resize: none;
}

.question_post textarea:hover, .question_post textarea:focus {
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

}
</style>

<!DOCTYPE html>
<div id="div">
<div id="form_div">
	<div class="question_pic">
		<img src="<?php echo $this->session->userdata('img'); ?>" />
	</div>
	<div class="question_post">
	
		<div id="wysihtml5-toolbar">
		  <a data-wysihtml5-command="bold">bold</a>
		  <a data-wysihtml5-command="italic">italic</a>
		  <a data-wysihtml5-command="insertOrderedList">insert ordered list</a>
		  <a data-wysihtml5-command="insertUnorderedList">insert unordered list</a>
		  <a data-wysihtml5-command="createLink">insert link</a>
		  
		  <div data-wysihtml5-dialog="createLink" style="display: none;">
			<label>
			  Link:
			  <input data-wysihtml5-dialog-field="href" value="http://" class="text">
			</label>
			<a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
		  </div>
		</div>
	
		<?php echo validation_errors(); ?>
		<?php echo form_open('question/insert/'.$ques_id) ?>
		<form>
			<textarea name="area" id="wysihtml5-textarea" placeholder="幫助他，答覆問題..." autofocus rows="10" cols="50"></textarea>
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


