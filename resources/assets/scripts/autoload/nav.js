import debounce from 'debounce'

const Nav = (() => {

	const Selectors = {
		NAV: '.site-nav',
		NAV_LIST: '.site-nav__list',
		NAV_ITEM: '.site-nav__item',
		NAV_LINK: '.site-nav__link',
		NAV_OVERLAY: '.site-nav__overlay',
		NAV_TOGGLE_BTN: '.site-nav__menu-btn',
		DROPDOWN: '.dropdown',
		DROPDOWN_CLOSE_BTN: '.dropdown__close-btn',
	}
	
	const Modifiers = {
		OPEN: 'open',
		OPEN_SIBLING: 'open-sibling',
		ACTIVE: 'active',
	}
	
	class Nav {
		constructor() {
			this.cache()
			this.bind()
		}

		cache() {
			this.$nav = $(Selectors.NAV)
			this.$navList = this.$nav.find(Selectors.NAV_LIST)
			this.$navItems = this.$nav.find(Selectors.NAV_ITEM)
			this.$navLinks = this.$nav.find(Selectors.NAV_LINK)
			this.$toggleNavBtn = $(Selectors.NAV_TOGGLE_BTN)
			this.$navOverlay = $(Selectors.NAV_OVERLAY)
			this.$dropdowns = this.$nav.find(Selectors.DROPDOWN)
			this.$closeDropdownBtn = $(Selectors.DROPDOWN_CLOSE_BTN)
		}

		bind() {
			this.$toggleNavBtn.on('click', () => this.toggleNav())
			this.$navLinks.on('click', event => this.toggleDropdown(event.target))
			this.$closeDropdownBtn.on('click', () => this.closeDropdown())

			this.$navOverlay.on('click', () => {
				this.closeNav()
				this.closeDropdown()
			})

			// Make sure the overlay is in sync with the dropdown state
			window.onresize = debounce(() => this.syncOverlay())
		}

		toggleNav() {
			this.$navList.hasClass(Modifiers.OPEN) ? this.closeNav() : this.openNav()
		}

		openNav() {
			this.$nav.addClass(Modifiers.OPEN)
			this.$navList.addClass(Modifiers.OPEN)
			this.$navOverlay.addClass(Modifiers.ACTIVE)
		}

		closeNav() {
			this.$nav.removeClass(Modifiers.OPEN)
			this.$navList.removeClass(Modifiers.OPEN)
			this.$dropdowns.removeClass(Modifiers.OPEN)
			this.$navOverlay.removeClass(Modifiers.ACTIVE)
		}

		toggleDropdown(target) {
			let $target = $(target)

			if ($target.hasClass(Modifiers.OPEN)) {
				return this.closeDropdown()
			}
			
			return this.openDropdown($target)
		}

		openDropdown(target) {
			let $link = target
			let $item = $link.parent()
			let $dropdown = $link.next(Selectors.NAV_DROPDOWN)

			// Remove modifiers of non clicked element
			this.$navItems.each((index, element) => {
				let $element = $(element)

				// Return if the current element is not the clicked element
				if ($element === $item) {
					return
				}

				$element.removeClass(Modifiers.OPEN)
				$element.children(Selectors.NAV_LINK).removeClass(Modifiers.OPEN)
				$element.children(Selectors.NAV_LINK).addClass(Modifiers.OPEN_SIBLING)
				$element.children(Selectors.NAV_DROPDOWN).removeClass(Modifiers.OPEN)
			})

			// Add correct modifiers to the clicked element and it's children
			$item.addClass(Modifiers.OPEN)
			$link.addClass(Modifiers.OPEN)
			$link.removeClass(Modifiers.OPEN_SIBLING)
			$dropdown.addClass(Modifiers.OPEN)
			this.$nav.addClass(Modifiers.OPEN)
		}

		closeDropdown() {
			this.$navItems.removeClass(Modifiers.OPEN)
			this.$navLinks.removeClass(`${Modifiers.OPEN} ${Modifiers.OPEN_SIBLING}`)
			this.$dropdowns.removeClass(Modifiers.OPEN)
			this.$nav.removeClass(Modifiers.OPEN)
		}

		syncOverlay() {
			if (this.$dropdowns.css('display') !== 'none') {
				this.$navOverlay.removeClass(Modifiers.ACTIVE)
			}
		}
	}

	return new Nav()

})()

export default Nav
