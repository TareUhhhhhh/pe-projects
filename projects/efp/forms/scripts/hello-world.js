const form = document.getElementById('hello');

// form.addEventListener('submit', (event) => {
// 	event.preventDefault();
// });

let name2 = form.elements['jsName'];

const nameId = name2.value;

const message = "Hello there, " + nameId + "!";

form.addEventListener('submit', (event) => {
	alert(message);
});