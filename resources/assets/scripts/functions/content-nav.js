import Stickyfill from 'stickyfilljs';
import debounce from 'debounce';

const Selectors = {
	CONTENT: '#main',
	CONTENT_NAV: '.content-nav',
	CONTENT_NAV_LIST: '.content-nav__list',
	CONTENT_NAV_ITEM: '.content-nav__item',
	CONTENT_NAV_LINK: '.content-nav__link',
}

const Modifiers = {
	ACTIVE: 'active',
	JS_PARENT: 'js--content-nav-parent',
	JS_IS_STUCK: 'js--content-nav-is-stuck',
	HIGHLIGHT: 'content-highlight',
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
		this.$contentNavLinks = $(Selectors.CONTENT_NAV_LINK);
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

		$(Selectors.CONTENT_NAV_LINK).on('click', event => {
			// let currentChoiceText = $(this).text();
			// $(".content-nav__currently-active").text(currentChoiceText);
			let heading = this.$contentHeadings.filter((index, element) => {
				return `#${element.getAttribute('id')}` === event.target.getAttribute('href')
			});

			heading.addClass(Modifiers.HIGHLIGHT);
			heading.attr(Modifiers.ARIA_CURRENT, true);

			setTimeout(() => {
				heading.removeClass(Modifiers.HIGHLIGHT);
				heading.removeAttr(Modifiers.ARIA_CURRENT);
			}, 1500);

			if (this.smallScreenDetected()) {
				$(".content-nav").toggle();
			}
		});

		$(".content-nav__toggle-button").click(function(){
			$(".content-nav").toggle();
		});
	}

	smallScreenDetected() {
		var isScreenSmall = true;
		if ($(window).width() > 768) {
			isScreenSmall = false;
		}
		return isScreenSmall;
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
		// let $currentActiveText = $(this.$contentNavItems[i]).text();

		if (isNaN(i)) {
			return;
		}

		this.$contentNavItems.removeClass(Modifiers.ACTIVE);
		this.$contentNavItems.removeAttr('aria-current');

		$(this.$contentNavItems[i]).addClass(Modifiers.ACTIVE);
		$(this.$contentNavItems[i]).attr(Modifiers.ARIA_CURRENT, true);
		// $(".content-nav__currently-active").text($currentActiveText);
	}
}

export default ContentNav;
