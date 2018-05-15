const Nav = (() => {

	const Selectors = {
		NAV: '.site-nav',
		NAV_LIST: '.site-nav__list',
		NAV_ITEM: '.site-nav__item',
		NAV_LINK: '.site-nav__link',
		OVERLAY: '.site-nav-overlay',
		NAV_DROPDOWN: '.dropdown',
		NAV_TOGGLE_BTN: '.site-nav__menu-btn',
	}
	
	const Modifiers = {
		OPEN: 'open',
		OPEN_SIBLING: 'open-sibling',
		ACTIVE: 'active',
	}
	
	class Nav {
		constructor() {
			this.cache();
			this.bind();
		}

		cache() {
			this.$nav = $(Selectors.NAV);
			this.$navList = this.$nav.find(Selectors.NAV_LIST);
			this.$navItems = this.$nav.find(Selectors.NAV_ITEM);
			this.$navLinks = this.$nav.find(Selectors.NAV_LINK);
			this.$dropdowns = this.$nav.find(Selectors.NAV_DROPDOWN);
			this.$toggleNavButton = $(Selectors.NAV_TOGGLE_BTN);
			this.$navOverlay = $(Selectors.OVERLAY);
		}

		bind() {
			this.$navLinks.each((i, el) => {
				$(el).on('click', event => this.toggleItem(event.target));
			});

			this.$toggleNavButton.on('click', () => this.toggleNav());
			this.$navOverlay.on('click', () => this.closeNav());
			// this.$nav.on('keyup', () => this.keypad());
		}

		toggleItem(target) {
			for (let i = 0; i < this.$navLinks.length; i++) {
				let $item = $(this.$navItems[i]);
				let $link = $item.children(Selectors.NAV_LINK);
				let $dropdown = $item.children(Selectors.DROPDOWN);

				if ($item[0] === $(target).parent()[0]) {
					
					if ($item.hasClass(Modifiers.OPEN)) {
						$item.removeClass(Modifiers.OPEN);
						$link.removeClass(Modifiers.OPEN);
						$dropdown.removeClass(Modifiers.OPEN);
						
						continue;
					}
					
					$item.addClass(Modifiers.OPEN);
					$link.addClass(Modifiers.OPEN);
					$dropdown.addClass(Modifiers.OPEN);
					
					continue;
				}
				
				$item.removeClass(Modifiers.OPEN);
				$link.removeClass(Modifiers.OPEN);
				$dropdown.removeClass(Modifiers.OPEN);
			}

			this.toggleOverlay();
		}

		isNavOpen() {
			return this.$navItems.hasClass(Modifiers.OPEN);
		}

		toggleNav() {
			if (this.$navList.hasClass(Modifiers.OPEN)) {
				this.$navList.removeClass(Modifiers.OPEN);
				this.$navOverlay.removeClass(Modifiers.ACTIVE);
				return;
			}

			this.$navList.addClass(Modifiers.OPEN);
			this.$navOverlay.addClass(Modifiers.ACTIVE);

		}

		toggleOverlay() {
			this.isNavOpen() ?
				this.$navOverlay.addClass(Modifiers.ACTIVE) :
				this.$navOverlay.removeClass(Modifiers.ACTIVE)
		}

		closeNav() {
			this.$navOverlay.removeClass(Modifiers.ACTIVE);
			this.$dropdowns.removeClass(Modifiers.OPEN);
		}
	}

	return new Nav();

})();

export default Nav;
