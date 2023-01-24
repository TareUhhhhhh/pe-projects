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
function max(a, b) {
	if (a > b) return a;
	return b;
}

let number = max(4,4);
console.log(number);

//Conditional Statement
function max(a, b) {
	return (a, b) ? a : b;
}

console.log(number);