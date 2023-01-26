let firstNumber = 5;
let secondNumber = 5;

function compare(first, second) {
	if (first > second) {
		let highest = first;
		console.log(highest);
	}
	else {
		let highest = second;
		console.log(highest);
	}
}

compare(firstNumber, secondNumber);

//
let number = max(4,4);
console.log(number);

function max(a, b) {
	if (a > b) return a;
	return b;
}

//Conditional Statement
function max(a, b) {
	return (a, b) ? a : b;
}

//Check speed function

// Speedlimit = 70
// 5 over = 1 point (each)
// 12 points = suspended

function checkSpeed(speed) {
	const speedLimit = 70;
	const speedPerPoint = 5;

	if (speed <= speedLimit) message = "Good job!";
	else {
		const points = Math.floor((speed -  speedLimit) / speedPerPoint);
		message = "Slow down! Points: " + points;

		if (points >= 12) {
			message = "License suspended, buddy!";
		}
	}

	console.log(message);
}

checkSpeed(72);


// Number display

showNumbers(8);

function showNumbers(limit) {
	for( i = 0; i <= limit; i++ ) {
		if (i%2 != 0)
			console.log(i, "Odd")
		else console.log(i, "Even")
	}
}

// Count Truthy / Falsy
// Falsy = undefined, null, '', 0, false, NaN
// Call function to count the number of truth statements in an array
// Function must look at each value and determine if it is truthy or falsy
// i++ for each truthy value
const stuffArray = [4, 0, true, '', null, 'seven'];
truthyCount(stuffArray);

function truthyCount(array) {
	let count = 0;
	
	for (let element of array) {
		if (element) 
			count++;
	}
	
	console.log(count);
}