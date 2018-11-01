import Tablesort from 'tablesort'

const Table = (() => {

	const Selectors = {
		TABLES: '.article table',
	}
	
	class Table {
		constructor() {
			if ($(Selectors.TABLES).length <= 0) {
				return
			}

			this.cache()
			this.bind()
		}

		cache() {
			this.$tables = $(Selectors.TABLES)
		}

		bind() {
			this.$tables.each((index, item) => {
				new Tablesort(item)
			})
		}
	}

	return new Table()

})()

export default Table
