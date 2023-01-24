//console.log
var name = "TareUhhhhhh";
var age = 33;
var mood = "Versatile";
console.log("Name: ", name, "Age: ", age, "Mood: ", mood);

//function
function shoutName() {
	console.log("My name is " + name + "!");
}

shoutName("Tara");

//nested function
function petGreeting() {
	var petName = prompt("What is your pets name?");

	function animal() {
		var petType = prompt("What kind of animal is " + petName + "?");

		if (petType) {
			alert("Tell your " + petType + " " + petName + " that I said hello!");
		}

		else {
			alert("You don't know what kind of animal " + petName + " is??");
			animal();
		}
	}

	if (petName) {
			animal();
		}

	else {
		alert("I think you forgot something.");
		petGreeting();
	}
}

petGreeting();

//array
var thisArray = ["apetite", "bug smash", "caterpillar", "dingus"];

// for ( var each = 0; each < thisArray.length; each++) {
// 	console.log("!!", thisArray[each]);
// }

function coolThings(array, funktion) {
	for ( var i = 0; i < array.length; i++) {
		funktion(array[i]);
	}
}

coolThings( thisArray, shoutName);

//foreach
var myFaves = [
	"skeleton", 
	"ghost", 
	"bat", 
	"fox", 
	"skull", 
	"bones",
	"cat"
]

var myFavorites = [
	{
		name: "skeleton",
		type: "prop",
	}, 
	{
		name: "ghost",
		type: "ethereal",
	},
	{
		name: "bat",
		type: "animal",
	},
	{
		name: "fox",
		type: "animal",
	},
	{
		name: "skull",
		type: "prop",
	},
	{
		name: "bones",
		type: "prop",
	},
	{
		name: "cat",
		type: "pet",
	},
]

function loggs(item, index) {
	var index = index + 1;
	console.log(index, item);
}

// myFaves.forEach( loggs );

myFavorites.forEach( function(item) {
	if (item.type != "prop") {
		console.log(item.name);
	}
});

var animals = myFavorites.filter( function(item) {
	if (item.type == "animal");
} );

console.log(animals);

function buildList(item, heading) {
	var h1 = document.createElement(h1);
	h1.textContent = "heading";
	document.body.apendChild(h1);
	var ul = document.createElement(ul);

	item.forEach( function(item) {
		var li = document.createElement(li);
		
	})
	

}