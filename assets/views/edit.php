﻿<?php echo $fairy->id;?>

<form method="POST">
	<fieldset>
		<legend>Edit fairy</legend>
		<label>Name</label>
		<input name="name" type="text" placeholder="Type something…"value="<?php echo $fairy->name; ?>"/>
		<label>Interests</label>
		<div>
			<textarea name="interests"><?php echo $fairy->interests; ?></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
                <a href="/fairies/view/<?php echo $fairy->id;?>" class="btn btn-primary">Cancel</a
	</fieldset>
</form>