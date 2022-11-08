const todoApp = {

	tasks: [],
	idNum: 0,

	print(note = "") {
		console.log(`--${note}`);
		console.log("tasks: ", this.tasks);
	},

	add(task) {
		const todo = {
			id: this.idNum++,
			task: task,
		};
		this.tasks.push(todo);
		this.print(`Added "${task}"`);
	},

	remove(id) {
		this.print(`Removed ${this.tasks[id].task}`);
		this.tasks.splice(id, 1);
		// delete tasks[id];
	},

	complete(id) {
		this.tasks[id].complete = true;
		this.print(`Completed ${this.tasks[id].task}`);
	},
}

todoApp.add("Go to the store");
todoApp.add("Order birthday cake");
todoApp.add("Invite friends to party");

todoApp.remove(2);
todoApp.complete(1);

todoApp.add("Drink a glass of whiskey");