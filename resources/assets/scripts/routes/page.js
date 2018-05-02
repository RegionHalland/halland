// import external dependencies
import 'jquery';
import ContentNav from './../functions/content-nav';

export default {
	init() {
		this.nav = new ContentNav('h1, h2, h3, h4, h5');
	},
};
