# 6/8 More EPF practice
## PHP manual documentation
### Reading the site:
 - There is a brief and to the point description at the very top
 - User Contributed Notes section has examples from users and may or not be helpful
 	- Check the years that contributions were submitted

### Function info:
 - isset: determine if variable has been set (not null - returns true or false)
 - unset: unset a given variable (destroys specified variable)
 - strlen: get string length or variable (this will count spaces as characters - does not work on array)
 - strrev: returns a string with input reversed ("Hello" becomes "olleH")
 - strtolower: returns string with all lowercase characters ("Tara" becomes "tara")
 - round: rounds a float (parameters to specify)
 - trim: remove whitespace (or characters from a string)
 - explode: split a string by a string ("hello,there" becomes "hello" "there" with , as the separator)
 - join: alias of implode
 - implode: join array elements with string (multiple strings in array becoe one string)
 - substr: returns portion of string specified by offset an length parameters
 - count: counts the elements within an array
 - array_push: push new element to the end of an array
 - array_rand: pick one or more random keys from an array
 - array_reverse: return array with elements in reverse order
 - array_slice: extract slice of array (?)
 - array_unique: removes duplicate values from array
 - date: format a unix timestamp
 - mail: sends mail...duh



# 6/6 Intro to Forms Notes
## HTML forms - 
### Basic elements:

- Form (everything lives inside of this element)
	- method=’post’
- Paragraph (This explains the point of the form – or a title)
- Label (Explains what is being entered into the input field)
- Input (This is where the data is added by the user and it is a self closing tag)
	- Type=’type/format of info to be added’ (this will determine what information can be entered and the format of the input– ie. slider)
	- Name=’information’ (entered as the key in an array – key/value pairs)
	- Value=’default info’
- Button	(This submits the information that was added)
	- type=’submit’
	- name=’submitted’ (this is important to recall back later)

- Add isset function to display “Submitted” message 

- Super global variable - 
	- Once information has been submitted through an html form, it is stored in a $POST array where the information can be accessed.
	- $POST[‘name’]
	- The data in the array is saved as strings – so numbers can’t be multiplied as they are.
	- floatval($variable) will translate the string into a number (float)


## Video Notes:
- Placeholder puts “example” information into the input field
- Get request is when we want to retrieve something
- Post request is when we want to add something
- Name is required on the submit so that it will run the code
- ‘Min’ and ‘max’ can be set on the input element to avoid negatives or other issues
- Value can be added to input for default information to be set
- Add <?=?> variable to the value input to retain the submitted information after submission
