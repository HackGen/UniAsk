<!DOCTYPE html>
<center>
<br>
<div id="wysihtml5-toolbar">
  <a data-wysihtml5-command="bold">bold</a>
  <a data-wysihtml5-command="italic">italic</a>
  <a data-wysihtml5-command="insertOrderedList">insert ordered list</a>
  <a data-wysihtml5-command="insertUnorderedList">insert unordered list</a>
  
  
  
  <!-- Some wysihtml5 commands like 'createLink' require extra paramaters specified by the user (eg. href) -->
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

<form><textarea name="area" id="wysihtml5-textarea" placeholder="Enter your text ..." autofocus rows="7" cols="80"></textarea>
<br>
<input type="submit" name="submit" value="回答" />
</center>
</form>
	<script>
		var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
  		toolbar:      "wysihtml5-toolbar", // id of toolbar element
  		parserRules:  wysihtml5ParserRules, // defined in parser rules set 
		});
	</script>


