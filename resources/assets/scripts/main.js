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
import pdv from './routes/pdv'
import quiSommesNous from './routes/qui-sommes-nous'

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  aboutUs,
  contact,
  pdv,
  quiSommesNous,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
