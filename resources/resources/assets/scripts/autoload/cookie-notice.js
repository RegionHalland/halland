import cookies from 'js-cookie';

const Cookies = ((cookies) => {
	const COOKIE_NAME = 'cookie_notice_accepted'
	
	const Selectors = {
		COOKIE_NOTICE: '#cookie-notice',
		COOKIE_BTN: '#cookie-consent',
	}

	class CookieNotice {
		constructor() {
			this.name = COOKIE_NAME;

			if (this.getCookie(this.name) !== undefined) {
				return;
			}

			this.cache();
			this.bind();
		}

		cache() {
			this.container = $(Selectors.COOKIE_NOTICE);
			this.consentBtn = this.container.find(Selectors.COOKIE_BTN);
		}

		bind() {
			this.consentBtn.on('click', () => {
				this.removeNotice();
				this.setCookie(this.name);
			})
		}

		removeNotice() {
			this.container.remove();
		}

		getCookie(name) {
			return cookies.get(name);
		}

		setCookie(name) {
			return cookies.set(name, 'true', { expires: 100 });
		}
	}

	return new CookieNotice();

})(cookies);

export default Cookies;
