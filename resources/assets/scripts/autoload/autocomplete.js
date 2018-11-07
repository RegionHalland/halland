import 'whatwg-fetch'
	
class Autocomplete {
	constructor() {
		this.cache()
		this.bind()
		this.searchApiUrl = 'http://search.i3demo.findwise.com/rest/apps/halland/searchers/halland?q='
	}

	cache() {
		this.$input = $('#main-search')
		this.$list = $('#autocomplete')
	}

	bind() {
		this.$input.on('input', event => {

			this.$list.empty()

			if (event.target.value.length <= 2) {
				return false
			}

			fetch(this.searchApiUrl + event.target.value + '*')
				.then(response => {
					return response.json()
				})
				.then(json => {
					for (let i = 0; i < json.vardgivarwebben.documents.length; i++) {
						this.$list.append(this.createItem(json.vardgivarwebben.documents[i]))
					}

					// json.vardgivarwebben.documents.map(item => {
					// 	console.log(this.createItem(item))
					// })
				})
		})
	}

	createItem(item) {
		return `<li><a href="${item._id}">${item.name}</a></li>`
	}
}

export default new Autocomplete()
