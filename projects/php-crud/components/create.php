<?php
	if (isset($_POST["submitted"])) {
		echo "Thanks for sharing your art!";
	}
?>


<h2>Add Your Artistic Creations to Our Growing Collection!</h2>

<form method='POST' class="add-art">
	<div class="artist">
		<label>Your Name</label>
		<input type="text" name='artist' placeholder="ex. Vincent Van Gogh" required>
	</div>

	<div class="title">
		<label>Artwork Title</label>
		<input type="text" name='title' placeholder="ex. Starry Night" required>
	</div>

	<div class="medium">
		<label>Medium Used</label>
		<input type="text" name='medium' placeholder="ex. Oil painting">
	</div>

	<div class="year-created">
		<label>Year Created</label>
		<input type="number" min="1" name ='year' placeholder="*optional">
	</div>

	<div class="upload-image">
		<label>Upload your art!</label>
		<input type="file" name='image' required>
	</div>

	<input type="submit" name="submitted">
</form>