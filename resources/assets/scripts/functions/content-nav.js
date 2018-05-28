import Stickyfill from 'stickyfilljs';
import debounce from 'debounce';

const Selectors = {
	CONTENT: '#main',
	CONTENT_NAV: '.content-nav',
	CONTENT_NAV_LIST: '.content-nav__list',
	CONTENT_NAV_ITEM: '.content-nav__item',
}

const Modifiers = {
	ACTIVE: 'active',
	JS_PARENT: 'js--content-nav-parent',
	JS_IS_STUCK: 'js--content-nav-is-stuck',
}

class ContentNav {
	constructor() {
		if ($(Selectors.CONTENT_NAV).length <= 0 || $(Selectors.CONTENT).length <= 0) {
			return;
		}

		this.cache();
		this.polyfillSticky();
		this.setCheckpoints();
		this.bind();
	}

	cache() {
		this.$content = $(Selectors.CONTENT);
		this.$contentHeadings = $(Selectors.CONTENT).find('h2, h3, h4');
		this.$contentNav = $(Selectors.CONTENT_NAV);
		this.$contentNavList = $(Selectors.CONTENT_NAV_LIST);
		this.$contentNavItems = $(Selectors.CONTENT_NAV_ITEM);
	}

	polyfillSticky() {
		Stickyfill.add(this.$contentNavList);
	}

	bind() {
		$(document).scroll(() => {
			this.toggleActive()
		})

		$(window).resize(debounce(() => {
			this.setCheckpoints()
			this.toggleActive()
		}, 100))
	}

	setCheckpoints() {
		this.$contentHeadings.each((i, el) => {
			el.$offsetTop = $(el).offset().top;
		})
	}

	getCheckpoint() {
		for (let i = 0; i <= this.$contentHeadings.length; i++) {
			if (i === this.$contentHeadings.length || window.scrollY < this.$contentHeadings[i].$offsetTop - 20) {
				return i - 1;
			}
		}

		return false;
	}

	toggleActive() {
		let i = this.getCheckpoint();

		if (isNaN(i)) {
			return;
		}

		this.$contentNavItems.removeClass(Modifiers.ACTIVE);
		$(this.$contentNavItems[i]).addClass(Modifiers.ACTIVE);
	}
}

export default ContentNav;