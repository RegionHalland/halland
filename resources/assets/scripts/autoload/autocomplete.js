import Awesomplete from 'awesomplete'

class Autocomplete {
	constructor() {
		var ajax = new XMLHttpRequest();
		ajax.open("GET", "https://restcountries.eu/rest/v1/lang/fr", true);
		ajax.onload = function() {
			var list = JSON.parse(ajax.responseText).map(function(i) { return i.name; });
			
			new Awesomplete(document.querySelector("#main-search"), { 
				list: list,

				container: function(input) {
					let container = document.createElement("div")
					console.log(input);
					container.append(input)

					console.log(container)
					
					return container
					// return $.create("div", {
					// 	className: "BAJS",
					// 	around: input,
					// });

				},
				// item: function(text, input) {

				// 	return $.create("li", {
				//         innerHTML: text,
				//         class
				//         "aria-selected": "false"
				//     });
				// },
			});
		};
		ajax.send();
	}
}

export default new Autocomplete()
