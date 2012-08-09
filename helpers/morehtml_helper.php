<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Foundation Helper for CodeIgniter.
 *
 * See http://foundation.zurb.com/ for more information about Foundation.
 *
 * @package		helpers
 * @author		Jan Lindblom <jan@powcorp.se>
 * @copyright	Copyright (c) 2012, POW! Corp.
 * @license		MIT
 * @version		0.3
 */


if ( ! function_exists('p')) {
	/**
	 * Create a paragraph element.
	 * 
	 * @param string $data content of the paragraph.
	 * @param string $class class of this paragraph.
	 * @return string a string with the generated HTML.
	 */
	function p($data = '', $class = '') {
		$class = ($class != '') ? ' class="'.$class.'"' : $class;
		return "<p".$class.">".$data."</p>";
	}
}

if ( ! function_exists('strong')) {
	/**
	 * Create a paragraph element.
	 * 
	 * @param string $data content of the paragraph.
	 * @param string $class class of this paragraph.
	 * @return string a string with the generated HTML.
	 */
	function strong($data = '', $class = '') {
		$class = ($class != '') ? ' class="'.$class.'"' : $class;
		return "<strong".$class.">".$data."</strong>";
	}
}

if ( ! function_exists('div')) {
	/**
	 * Create a div element.
	 * 
	 * @param string $data content of the div.
	 * @param string $class class of this div.
	 * @return string a string with the generated HTML.
	 */
	function div($data = '', $class = '', $id = '') {
		$class = ($class != '') ? ' class="'.$class.'"' : $class;
		$id = ($id != '') ? ' id="'.$id.'"' : $id;
		return "<div".$class.$id.">".$data."</div>";
	}
}

if ( ! function_exists('div_open')) {
	/**
	 * Open a div.
	 * 
	 * @param string $class class of this div.
	 * @return string a string with the generated HTML.
	 */
	function div_open($class = '') {
		$class = ($class != '') ? ' class="'.$class.'"' : $class;
		return "<div".$class.">";
	}
}

if ( ! function_exists('div_close')) {
	/**
	 * Close a div.
	 * 
	 * @return string a string with the generated HTML.
	 */
	function div_close($num = 1) {
		return str_repeat("</div>",$num);
	}
}

if ( ! function_exists('hr')) {
	function hr() {
		return '<hr/>';
	}
}

?>