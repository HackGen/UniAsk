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
	height: 90px;
	width: 90px;
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

.question_submit {
}

.question_tag {
	height: 30px;
	text-align: left;
}
</style>
<link href="http://114.35.129.223/UniAsk/assets/jqwidgets/styles/jqx.base.css" type="text/css" rel="stylesheet" />

<?php echo validation_errors(); ?>
<div id="div">
	<div id="form_div">
		<?php echo form_open('question/create') ?>
			<div class="question_pic">
				<img src="<?php echo $this->session->userdata('img'); ?>" />
			</div>
			<div class="question_post">
				<div class="question_tag">
					<select name="catalog_school" id="catalog_school" tabindex="1">
				<?php
					$query = $this->db->query('SELECT school_name FROM catalog_school');
					foreach($query->result_array() as $row) {
						  echo '<option name="' . $row['school_name'] . '">' . $row['school_name'] . '</option>';
					}
						?>
				      </select>
				      <select name="catalog_detail" id="catalog_detail" tabindex="1">
				<?php

					$query = $this->db->query('SELECT detail_name FROM catalog_detail');
					foreach($query->result_array() as $row) {
						  echo '<option name="' . $row['detail_name'] . '">' . $row['detail_name'] . '</option>';
						}
					?>
			      </select>
				</div>
				<textarea name="text"></textarea><br />
				<div class="question_submit">
					<input type="submit" name="submit" value="發問" />
				</div>
			</div>
		</form>
	</div>
</div>
