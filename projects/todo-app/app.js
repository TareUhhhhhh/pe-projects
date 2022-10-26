
const todos = [];
var count = 0;

function update(note = "") {
	console.log(`--${note}`);
	console.log("todos: ", todos);
}

function add(content) {
	const todo = {
		id: count++,
		content: content,
	};
	todos.push(todo);
	update(`Added "${content}"`);
}

function remove(id) {
	update(`Removed ${todos[id].content}`);
	// todos.splice(id, 1);
	delete todos[id];
}

function complete(id) {
	todos[id].complete = true;
	update(`Completed ${todos[id].content}`);
}

add("Go to the store");
add("Order birthday cake");
add("Invite friends to party");

remove(2);
complete(1);

add("Drink a glass of whiskey");