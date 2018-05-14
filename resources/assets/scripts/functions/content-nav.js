// import stickybits from 'stickybits';

const ContentNav = (() => {

	// const Selectors = {
	// 	NAV: '.site-nav',
	// 	NAV_LIST: '.site-nav__list',
	// 	NAV_ITEM: '.site-nav__item',
	// 	NAV_LINK: '.site-nav__link',
	// 	OVERLAY: '.site-nav-overlay',
	// 	NAV_DROPDOWN: '.dropdown',
	// 	NAV_TOGGLE_BTN: '.site-nav__menu-btn',
	// }
	
	// const Modifiers = {
	// 	OPEN: 'open',
	// 	OPEN_SIBLING: 'open-sibling',
	// 	ACTIVE: 'active',
	// }
	
	class Nav {
		constructor() {
			this.cache();
			this.bind();
		}
	}

	return new Nav();
	
})();

export default ContentNav;
