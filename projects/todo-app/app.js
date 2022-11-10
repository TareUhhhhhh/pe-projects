function FoodEntry(restaurant, item, reorder) {
	this.restaurant = restaurant;
	this.item = item;
	this.reorder = reorder;

	// this.entry = function() {
	// 	console.log("Restaurant: ", restaurant);
	// 	console.log("Menu Item: ", item);
	// 	console.log("Reorder? ", reorder);
	// }
}

const food = new FoodEntry("Brewtop", "Chicken Fingers", false);

console.log(food);


const todoApp = {

	tasks: [], //Creates the array that gets stored in memory
	numId: 0,

	update(note = "") {
		console.log(`------ ${note}`);
		console.log("tasks: ", this.tasks);
	},

	add(content) {
		const task = {			// This creates an object rather than just inserting an item
			id: this.numId++,
			content: content,
		}
		this.tasks = [...this.tasks, task]; //Adds new task into the array of previous tasks
		this.update(`Added: ${content}`); //This will print out the information every time an item is added
	},

	remove(id) {
		this.update(`Removed: ${tasks[id].content}`);
		this.tasks.splice(id, 1); //This will remove based on the systematically assigned index number -- the paernthesis indicate the (start, end) of the values -- so entering the id of the item to be removed is the "start" and it only spans 1 so that is also the "end"
	},

	complete(id) {
		this.tasks[id].complete = true;
		this.update(`Completed ${this.tasks[id].content}`);
	},

	change(id, newTask) {
		this.update(`Task updated: ${newTask}`);
		this.tasks[id].content = newTask;
	},
}

todoApp.add("sleep");
todoApp.add("shower");
todoApp.add("eat");

todoApp.change(1, "bathe");

todoApp.complete(0);


























// const tasks = []; //Creates the array that gets stored in memory
// var numId = 0;

// function add(content) {
// 	const task = {			// This creates an object rather than just inserting an item
// 		id: numId++,
// 		content: content,
// 	};
// 	tasks.push(task); //This pushes the (task) into the tasks[] array -- or the object when applicable
// 	update(`Added: ${content}`); //This will print out the information every time an item is added
// }

// function remove(id) {
// 	update(`Removed: ${tasks[id].content}`);
// 	tasks.splice(id, 1); //This will remove based on the systematically assigned index number -- the paernthesis indicate the (start, end) of the values -- so entering the id of the item to be removed is the "start" and it only spans 1 so that is also the "end"
// }

// function update(note = "") {
// 	console.log(`------ ${note}`);
// 	console.log("tasks: ", tasks);
// }

// function complete(id) {
// 	tasks[id].complete = true;
// 	update(`Completed ${tasks[id].content}`);
// }

// function change(id, newTask) {
// 	update(`Task updated: ${newTask}`);
// 	tasks[id].content = newTask;
// }

// add("sleep");
// add("shower");
// add("eat");

// change(1, "bathe");

// // complete(1);

// // console.log("tasks: ", tasks, "Original example of logging to the console"); //This prints all of the items in the tasks[] array

// // remove(0);

// // update("Example of function working independently -- not within another function"); // This can now be used in place of console.log