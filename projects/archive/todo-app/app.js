// FOOD APP - user specific food log for preferences

//Each user will have their own **entries** recorded (local storage? How does this get specified per person and with all entries)

//Each *entry* REQUIRES restaurant name, menu item and preference 
// -- id auto added from fucntion
//Optional - notes, price, 

//Submit logs entry into local storage specific to user's list

const foodApp = {

	entries: [],

	print(note = "") {
		console.log(`${note}`);
		// console.log("Entry: ", this.entries);
	},

	add(restaurant, item, like) {
		idNumber: 0;
		const entry = {
			id: this.idNumber++,
			restaurant: restaurant,
			item: item,
		};

		// this.entries.push(entry); //What does this do?
		// this.print(`id: ${this.id}`);
		this.print(`----New Entry----`);
		this.print(`Restaurant: ${restaurant}`);
		this.print(`Item: ${item}`);
		this.print(`Would order again? ${like}`);
	},

}

foodApp.add("Home", "Salmon", true);
foodApp.add("Brewtop", "Chicken Tenders", false);
foodApp.add("Hawaiian Bros", "Huli Huli Chicken", true);

