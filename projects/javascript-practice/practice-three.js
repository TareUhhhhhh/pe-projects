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
	else return b;
}