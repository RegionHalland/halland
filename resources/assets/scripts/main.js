// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*";

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import single from './routes/single';
import page from './routes/page';
import search from './routes/search';

/** Populate Router instance with DOM routes */
const routes = new Router({
	// All pages
	common,
	// Home page
	home,
	// Single blogposts etc.
	single,
	// standard text pages
	page,
	// Search page
	search,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
