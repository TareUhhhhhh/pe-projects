const form = document.getElementById('hello');

// form.addEventListener('submit', (event) => {
// 	event.preventDefault();
// });

const name = form.elements['name2'];

var nameId = name.value;

console.log(nameId);

form.addEventListener('submit', (event) => {
	const message = "Hello there, " + nameId + "!";

	alert(message);
});