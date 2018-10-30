const Nav = (() => {

	const Selectors = {
		NAV: '.js-site-nav',
		NAV_LISTS: '.js-site-nav__list',
		NAV_TOGGLE_BTN: '.js-site-nav--toggle',		
		NAV_TOGGLE_SUB_NAV: '.js-site-nav__toggle-subnav',
	}
	
	const Modifiers = {
		ACTIVE: 'active',
		HIDDEN: 'hidden',
	}
	
	class Nav {
		constructor() {
			if ($(Selectors.NAV).length <= 0) {
				return
			}

			this.cache()
			this.bind()
		}

		cache() {
			this.$nav = $(Selectors.NAV)
			this.$navToggleBtn = $(Selectors.NAV_TOGGLE_BTN)
		}

		bind() {
			this.$navToggleBtn.on('click', () => this.toggleNav())
			
			$(Selectors.NAV_TOGGLE_SUB_NAV).on('click', function() {
				let $list = $(this).siblings(Selectors.NAV_LISTS)
				$list.toggleClass(Modifiers.HIDDEN)
			})
		}

		toggleNav() {
			this.$nav.toggleClass(Modifiers.HIDDEN)
		}
	}

	return new Nav()

})()

export default Nav
