/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Digi = {
		
    // JS to be fired on all page
    'common': {
      init: function() {
				console.log('global js loaded!');
      },
      finalize: function() {

      }
    },
    // JS to be fired on home page
    'home': {
      init: function() {
				console.log('home page js loaded!');
      },
      finalize: function() {

      }
    },
		// JS to be fired on blog page
		'blog': {
      init: function() {
				console.log('blog js loaded!');
      },
      finalize: function() {

      }
    },
    // JS to be fired O nas template
    'page_template_template_about_us': {
      init: function() {
				console.log('about us js loaded!');
      },
			finalize: function() {
				
      }
    },
		// JS to be fired on Kontakt template
    'page_template_template_contact': {
      init: function() {
				console.log('contact js loaded!');
      },
			finalize: function() {
				
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Digi;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
