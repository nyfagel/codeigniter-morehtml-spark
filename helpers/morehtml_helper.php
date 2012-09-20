<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * More HTML Helper for CodeIgniter.
 * 
 * @package		helpers
 * @author		Jan Lindblom <jan@nyfagel.se>
 * @copyright	Copyright (c) 2012, Ny fågel.
 * @license		MIT
 * @version		0.3.2
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
	 * @access public
	 * @param string $data content of the div (default: '').
	 * @param string $class class of this div (default: '').
	 * @param string $id id of this div (default: '').
	 * @param string $style optional style of this div (default: '').
	 * @param string $itemtype if supplied, outputs an itemscope associated with
	 *        the supplied item type (default: '').
	 * @param string $itemprop if supplied, outputs an itemprop (default: '').
	 * @return string a string with the generated HTML.
	 */
	function div($data = '', $class = '', $id = '', $style = '', $itemtype = '', $itemprop = '') {
		$class = ($class != '') ? ' class="'.$class.'"' : $class;
		$id = ($id != '') ? ' id="'.$id.'"' : $id;
		$style = ($style != '') ? ' style="'.$style.'"' : $style;
		$itemtype = ($itemtype != '') ? ' itemscope itemtype="'.$itemtype.'"' : $itemtype;
		$itemprop = ($itemprop != '') ? ' itemprop="'.$itemprop.'"' : $itemprop;
		return "<div".$class.$id.$style.$itemtype.$itemprop.">".$data."</div>";
	}
}

if ( ! function_exists('span')) {
	/**
	 * Create a span element.
	 * 
	 * You can use the $itemscope and $itemprop parameters to generate schema.org
	 * structured data elements.
	 * 
	 * @access public
	 * @param string $data content of the span (default: '').
	 * @param string $class class of this span (default: '').
	 * @param string $id id of this span (default: '').
	 * @param string $style optional style of this span (default: '').
	 * @param string $itemtype if supplied, outputs an itemscope associated with
	 *        the supplied item type (default: '').
	 * @param string $itemprop if supplied, outputs an itemprop (default: '').
	 * @return string a string with the generated HTML.
	 */
	function span($data = '', $class = '', $id = '', $style = '', $itemtype = '', $itemprop = '') {
		$class = ($class != '') ? ' class="'.$class.'"' : $class;
		$id = ($id != '') ? ' id="'.$id.'"' : $id;
		$style = ($style != '') ? ' style="'.$style.'"' : $style;
		$itemtype = ($itemtype != '') ? ' itemscope itemtype="'.$itemtype.'"' : $itemtype;
		$itemprop = ($itemprop != '') ? ' itemprop="'.$itemprop.'"' : $itemprop;
		return "<span".$class.$id.$style.$itemtype.$itemprop.">".$data."</span>";
	}
}

if ( ! function_exists('div_open')) {
	/**
	 * Open a div.
	 * 
	 * @param string $class class of this div (default: '').
	 * @param string $id id of this div (default: '').
	 * @param string $style optional style of this div (default: '').
	 * @param string $itemtype if supplied, outputs an itemscope associated with
	 *        the supplied item type (default: '').
	 * @param string $itemprop if supplied, outputs an itemprop (default: '').
	 * @return string a string with the generated HTML.
	 */
	function div_open($class = '', $id = '', $style = '', $itemtype = '', $itemprop = '') {
		$id = ($id != '') ? ' id="'.$id.'"' : $id;
		$style = ($style != '') ? ' style="'.$style.'"' : $style;
		$itemtype = ($itemtype != '') ? ' itemscope itemtype="'.$itemtype.'"' : $itemtype;
		$itemprop = ($itemprop != '') ? ' itemprop="'.$itemprop.'"' : $itemprop;
		return "<div".$class.$id.$style.$itemtype.$itemprop.">";
	}
}

if ( ! function_exists('span_open')) {
	/**
	 * Open a span.
	 * 
	 * @param string $class class of this span (default: '').
	 * @param string $id id of this span (default: '').
	 * @param string $style optional style of this span (default: '').
	 * @param string $itemtype if supplied, outputs an itemscope associated with
	 *        the supplied item type (default: '').
	 * @param string $itemprop if supplied, outputs an itemprop (default: '').
	 * @return string a string with the generated HTML.
	 */
	function span_open($class = '', $id = '', $style = '', $itemtype = '', $itemprop = '') {
		$id = ($id != '') ? ' id="'.$id.'"' : $id;
		$style = ($style != '') ? ' style="'.$style.'"' : $style;
		$itemtype = ($itemtype != '') ? ' itemscope itemtype="'.$itemtype.'"' : $itemtype;
		$itemprop = ($itemprop != '') ? ' itemprop="'.$itemprop.'"' : $itemprop;
		return "<div".$class.$id.$style.$itemtype.$itemprop.">";
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

if ( ! function_exists('span_close')) {
	/**
	 * Close a span.
	 * 
	 * @return string a string with the generated HTML.
	 */
	function span_close($num = 1) {
		return str_repeat("</span>",$num);
	}
}

if ( ! function_exists('hr')) {
	function hr() {
		return '<hr/>';
	}
}

if ( ! function_exists('script_tag')) {
	/**
	 * Script
	 * 
	 * Generates a script inclusion of a JavaScript file.
	 * 
	 * Based on the CodeIgniters original Link Tag.
	 * 
	 * @access public
	 * @author Isern Palaus <ipalaus@ipalaus.es>, Viktor Rutberg <wishie@gmail.com>
	 * @param mixed $src javascript sources or an array (default: '').
	 * @param string $language language (default: 'javascript').
	 * @param string $type meta type (default: 'text/javascript').
	 * @param boolean $index_page should index_page be added to the javascript path
	 *        (default: FALSE).
	 * @return string
	 */
	 function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE) {
		$CI =& get_instance();

		$script = '<script ';
		
		if (is_array($src)) {
			foreach($src as $v) {
				if ($k == 'src' AND strpos($v, '://') === FALSE) {
					if ($index_page === TRUE) {
						$script .= ' src="'.$CI->config->site_url($v).'"';
					} else {
						$script .= ' src="'.$CI->config->slash_item('base_url').$v.'"';
					}
				} else {
					$script .= "$k=\"$v\"";
				}
			}
			
			$script .= ">\n";
		} else {
			if ( strpos($src, '://') !== FALSE) {
				$script .= ' src="'.$src.'" ';
			} elseif ($index_page === TRUE) {
				$script .= ' src="'.$CI->config->site_url($src).'" ';
			} else {
				$script .= ' src="'.$CI->config->slash_item('base_url').$src.'" ';
			}
			
			$script .= 'language="'.$language.'" type="'.$type.'"';
			$script .= '>'."\n";
		}
		
		$script .= '</script>';
		return $script;
	}
}

/* End of file morehtml_helper.php */
/* Location: ./application/helpers/morehtml_helper.php */
?>