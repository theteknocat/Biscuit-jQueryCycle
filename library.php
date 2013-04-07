<?php
/**
 * Register jQuery Cycle plugin for inclusion
 *
 * @package Libraries
 * @subpackage JqueryCycle
 * @version $Id: library.php 14236 2011-09-12 21:27:37Z teknocat $
 */
class JqueryCycle extends LibraryLoader {
	protected static function register() {
		Biscuit::instance()->Theme->register_js('footer', 'libraries/jquery_cycle/vendor/jquery.cycle.all.js');
	}
}
