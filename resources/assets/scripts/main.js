// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import contact from './routes/contact';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  aboutUs,
  contact,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
