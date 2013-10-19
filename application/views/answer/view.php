<!DOCTYPE html>
<html>
<?php
echo $user_id."\n";
echo $date."\n";
echo $content."\n";
echo $fb_id."\n";
echo $email."\n";

?>
<div class="view_pic"> 
<img src="https://graph.facebook.com/<?php echo $fb_id ?>/picture?height=100&width=100" />
</div>

</html>
