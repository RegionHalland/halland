// import external dependencies
import 'jquery';
import ContentNav from './../functions/content-nav';
import SidebarNav from './../functions/sidebar-nav';

export default {
	init() {
		new ContentNav();
		new SidebarNav();
	},
};
