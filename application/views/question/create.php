<style>
#form_div {
	display: inline-block;
	text-align: left;
	padding: 20px;
	
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
	border: 1px solid #fff;
	outline: 0;
	padding: 4px 2px;
	height: 50px;
	width: 500px;
	resize: none;
}
.question_post textarea:hover, .question_post textarea:focus {
	border: 1px solid #0bb492;
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

.question_tag {
	border-top: 1px solid #e6e6e6;
}

.tag_button {
	height: 10px;
	width: 500px;
	color: #aaa;
}

</style>

<?php echo validation_errors(); ?>
<div id="div">
<div id="form_div">
	<?php echo form_open('question/create') ?>
		<div class="question_pic">
			<img src="<?php echo $this->session->userdata('img'); ?>"  />
		</div>
		<div class="question_post">
			<textarea name="text"></textarea><br />
			<div class="tag_button">
				<div class="question_tag">
					<select name="catalog_school">
						<?php
						$query = $this->db->query('SELECT school_name FROM catalog_school');
						foreach($query->result_array() as $row) {
							echo '<option name="' . $row['school_name'] . '">' . $row['school_name'] . '</option>';
						}
						?>
					</select>
					<select name="catalog_detail">
						<?php
						$query = $this->db->query('SELECT detail_name FROM catalog_detail');
						foreach($query->result_array() as $row) {
							echo '<option name="' . $row['detail_name'] . '">' . $row['detail_name'] . '</option>';
						}
						?>
					</select>
					<input type="submit" name="submit" value="發問" />
				</div>
			</div>
		</div>
	</form>
</div>
</div>
