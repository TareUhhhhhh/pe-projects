
const tasks = []; //Creates the array that gets stored in memory

function add(task) {
	tasks.push(task); //This pushes the (task) into the tasks[] array
}

add("sleep");
add("shower");
add("eat");

console.log("tasks: ", tasks); //This prints all of the items in the tasks[] array