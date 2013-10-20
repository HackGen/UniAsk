
	<div id="div">
	<div id="view_div">
		<div class="view_pic">
			<img src="https://graph.facebook.com/<?php echo $user['fb_id'];?>/picture?height=100&width=100" />
		</div>
		<div class="view_post">
			<strong><?php echo $name;?> 回答:</strong><br/>
			<?php echo $content; ?>
			<input type="submit" name="submit" value="+" />
			<input type="submit" name="submit" value="-" />
			<span><?php echo date("M d Y",$date);?></span>
		</div>
	</div>
</div>

