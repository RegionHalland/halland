import Stickyfill from 'stickyfilljs';
import debounce from 'debounce';

const Selectors = {
	CONTENT: '#main',
	CONTENT_NAV: '.content-nav',
	CONTENT_NAV_LIST: '.content-nav__list',
	CONTENT_NAV_ITEM: '.content-nav__item',
	CONTENT_NAV_LINK_DATA: 'data-pointstoid',
}

const Modifiers = {
	ACTIVE: 'active',
	JS_PARENT: 'js--content-nav-parent',
	JS_IS_STUCK: 'js--content-nav-is-stuck',
	ARIA_CURRENT: 'aria-current',
	H_FLASH_CLASS: 'headline__focused',
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
		Stickyfill.add(this.$contentNav);
	}

	bind() {
		$(document).scroll(() => {
			this.toggleActive()
		})

		$(window).resize(debounce(() => {
			this.setCheckpoints()
			this.toggleActive()
		}, 100))

		$(".content-nav__link").click(function(){
			let id = $(this).attr(Selectors.CONTENT_NAV_LINK_DATA);
			$(".content-nav__item").removeClass(Modifiers.ACTIVE).removeAttr(Modifiers.ARIA_CURRENT);
			$(this).parent().addClass(Modifiers.ACTIVE).attr(Modifiers.ARIA_CURRENT, true); // TODO: Better way than parent?
			$("#" + id).addClass(Modifiers.H_FLASH_CLASS);
			setTimeout(function(id) {
				$("#" + id).removeClass(Modifiers.H_FLASH_CLASS);
			}, 2000, id);
		});
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
		this.$contentNavItems.removeAttr(Modifiers.ARIA_CURRENT);

		$(this.$contentNavItems[i]).addClass(Modifiers.ACTIVE);
		$(this.$contentNavItems[i]).attr(Modifiers.ARIA_CURRENT, true);
	}
}

export default ContentNav;
