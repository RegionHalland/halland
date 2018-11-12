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

			this.clearList()
			
			if (event.target.value.length <= 1) {
				return false
			}

			this.showList()

			fetch(this.searchApiUrl + event.target.value + '*')
				.then(response => {
					return response.json()
				})
				.then(json => {
					for (let i = 0; i < json.vardgivarwebben.documents.length; i++) {
						this.$list.append(this.createItem(json.vardgivarwebben.documents[i]))
					}

					json.vardgivarwebben.documents.map(item => {
						console.log(this.createItem(item))
					})
				})
		})
	}

	clearList() {
		this.$list.attr('aria-hidden', 'true')
		this.$list.addClass('hidden')
		this.$list.empty()
	}

	showList() {
		this.$list.attr('aria-hidden', 'false')
		this.$list.removeClass('hidden')
	}

	createItem(item) {
		return `<li class="block"><a class="block py-1 px-2" href="${item._id}">${item.name}</a></li>`
	}
}

export default new Autocomplete()
