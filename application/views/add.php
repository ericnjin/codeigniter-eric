<form action="/index.php/topic/add" method="post" class="span10">
	<?php echo validation_errors(); ?>
	<input type="text" name="title" placeholder="title" class="span12" />
	<!-- <textarea name="" id="" cols="30" rows="10"> -->
	<textarea name="description" placeholder="description" class="span12" rows="15"></textarea>
	<input class="btn" type="submit" />

</form>	