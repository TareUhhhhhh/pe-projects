const form = document.getElementById('hello');

// form.addEventListener('submit', (event) => {
// 	event.preventDefault();
// });

const name = form.elements['name2'];

var nameId = name.value;

const message = "Hello there, " + nameId;

form.addEventListener('submit', (event) => {
	alert(message);
});