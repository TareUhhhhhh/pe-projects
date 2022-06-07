#6/6 Intro to Forms Notes

##HTML forms - 

###Basic elements:

Form (everything lives inside of this element)
 - method=’post’
Paragraph (This explains the point of the form – or a title)
Label (Explains what is being entered into the input field)
Input (This is where the data is added by the user and it is a self closing tag)
Type=’type/format of info to be added’ (this will determine what information can be entered and the format of the input– ie. slider)
Name=’information’ (entered as the key in an array – key/value pairs)
Value=’default info’
Button	(This submits the information that was added)
type=’submit’
name=’submitted’ (this is important to recall back later)

Add isset function to display “Submitted” message 

Super global variable - 
Once information has been submitted through an html form, it is stored in a $_POST array where the information can be accessed.
$_POST[‘name’]
The data in the array is saved as strings – so numbers can’t be multiplied as they are.
floatval($variable) will translate the string into a number (float)


Video Notes:
Placeholder puts “example” information into the input field
Get request is when we want to retrieve something
Post request is when we want to add something
Name is required on the submit so that it will run the code
‘Min’ and ‘max’ can be set on the input element to avoid negatives or other issues
Value can be added to input for default information to be set
Add <?=?> variable to the value input to retain the submitted information after submission
