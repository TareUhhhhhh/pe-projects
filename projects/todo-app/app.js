const data = localStorage;

var tasks = []; // this needs to be the global object that all tasks are assigned to - then local storage will always have this object of task list assigned as the tasks
var counter = 0;

const $form = document.querySelector("form");
const $input = document.querySelector("input");
const $output = document.querySelector("output");

function store() {
	data.setItem(`Tasks`, JSON.stringify({tasks: tasks}));
}

function add(task) {
	var task = {
		id: counter++,
		task,
		complete: false,
	}

	tasks = [...tasks, task];
	renderTasks(tasks);
}

// function remove(id) {
// 	const filtered = tasks.filter( function(todo) {
// 		return todo.id != id;
// 	});

// 	tasks = [...filtered];
// }

// function complete(id) {
// 	 for (let i = 0; i < tasks.length; i++) {
// 	 	if (tasks[i].id == id) {
// 	 		tasks[i].complete = true;
// 	 	}
// 	 }
// }

function renderTask(task) {
	return `
		<task-card>
			<h2>${task.content}</h2>
		</task-card>
	`;
}

function renderTasks(tasks) {
	var template = "";
	tasks.forEach( function(task) {
		template += renderTask(task);
	});
	$output.innerHTML = template;
}

$form.addEventListener("submit", function(event) {
	event.preventDefault();

	add($input.value);
	$input.value = "";

	console.log("tasks ", tasks);
})


// localStorage.setItem("user", "Tara");

// const user = localStorage.getItem("user");

// const message = `Current User: ${user}`;

// document.body.textContent = message;





// function FoodEntry(restaurant, item, reorder) {
// 	this.restaurant = restaurant;
// 	this.item = item;
// 	this.reorder = reorder;

// 	// this.entry = function() {
// 	// 	console.log("Restaurant: ", restaurant);
// 	// 	console.log("Menu Item: ", item);
// 	// 	console.log("Reorder? ", reorder);
// 	// }
// }

// const food = new FoodEntry("Brewtop", "Chicken Fingers", false);

// console.log(food);


// const todoApp = {

// 	tasks: [], //Creates the array that gets stored in memory
// 	numId: 0,

// 	update(note = "") {
// 		console.log(`------ ${note}`);
// 		console.log("tasks: ", this.tasks);
// 	},

// 	add(content) {
// 		const task = {			// This creates an object rather than just inserting an item
// 			id: this.numId++,
// 			content: content,
// 		}
// 		this.tasks = [...this.tasks, task]; //Adds new task into the array of previous tasks
// 		this.update(`Added: ${content}`); //This will print out the information every time an item is added
// 	},

// 	remove(id) {
// 		this.update(`Removed: ${tasks[id].content}`);
// 		this.tasks.splice(id, 1); //This will remove based on the systematically assigned index number -- the paernthesis indicate the (start, end) of the values -- so entering the id of the item to be removed is the "start" and it only spans 1 so that is also the "end"
// 	},

// 	complete(id) {
// 		this.tasks[id].complete = true;
// 		this.update(`Completed ${this.tasks[id].content}`);
// 	},

// 	change(id, newTask) {
// 		this.update(`Task updated: ${newTask}`);
// 		this.tasks[id].content = newTask;
// 	},
// }

// todoApp.add("sleep");
// todoApp.add("shower");
// todoApp.add("eat");

// todoApp.change(1, "bathe");

// todoApp.complete(0);














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