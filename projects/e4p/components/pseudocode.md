# PSEUDOCODE

## MAD LIB

### Human English:
	- The end goal would be to have a story on the screen. Some of the text will be static and the same for every instance. This would be the main part of the story that is not affected by the words entered by the user.
	- A form would need to be created to request various parts of speech to insert into a story
	- The madlib would not display at all until data was entered into the form


### HTML elements:
	- The title
	- the static text
	- The form to enter words

### PHP elements:
	- Checking if the form was submitted (isset)
	- Initializing variables
	- Assigning variables from form data
	- Dynamic variables within the html madlib story

### FORM DATA FIELDS: (Input)
	- Noun
	- Verb
	- Adjective
	- Adverb
	- Submit button

### OUTPUT:
	- Sentences with static and dynamic data from the form.


<!-- DATA DISPLAY FUNCTION  -->
<!-- 	function format($variable) {
	echo "<pre>";
		echo "<code>";
			echo print_r( $variable );
		echo "</code>";
	echo "</pre>";
}

format( $_POST ); -->