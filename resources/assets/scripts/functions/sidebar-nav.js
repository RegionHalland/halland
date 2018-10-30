const Selectors = {
	SIDEBAR_NAV: '.js-sidebar-nav',
	SIDEBAR_NAV_LISTS: '.js-sidebar-nav__list',
	SIDEBAR_NAV_TOGGLE_BTN: '.js-sidebar-nav__toggle-btn',
}

const Modifiers = {
	ACTIVE: 'active',
	HIDDEN: 'hidden',
}

class SidebarNav {
	constructor() {
		if ($(Selectors.SIDEBAR_NAV).length <= 0) {
			return
		}

		this.cache()
		this.bind()
		this.findActiveItem()
		this.showActiveItem()
	}

	cache() {
		this.$sidebarNav = $(Selectors.SIDEBAR_NAV)
	}

	bind() {
		$(Selectors.SIDEBAR_NAV_TOGGLE_BTN).on('click', function() {
			let $list = $(this).siblings(Selectors.SIDEBAR_NAV_LISTS)
			$list.toggleClass(Modifiers.HIDDEN)
		})
	}

	findActiveItem() {
		console.log(this.$sidebarNav)
		this.activeItem = this.$sidebarNav.find(`.${Modifiers.ACTIVE}`)
	}

	showActiveItem() {
		let parents = this.activeItem.parentsUntil(Selectors.SIDEBAR_NAV)
		parents.removeClass(Modifiers.HIDDEN)
	}
}

export default SidebarNav
