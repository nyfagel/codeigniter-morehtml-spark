codeigniter-morehtml-spark
==========================

Extensions to the html helper.

## Functions

### p($data = '', $class = '')

Create a paragraph element.

 * @param string $data content of the paragraph.
 * @param string $class class of this paragraph.
 * @return string a string with the generated HTML.

### strong($data = '', $class = '')

Create a div element.

 * @param string $data content of the div (default: '').
 * @param string $class class of this div (default: '').
 * @param string $id id of this div (default: '').
 * @param string $style optional style of this div (default: '').
 * @param string $itemtype if supplied, outputs an itemscope associated with the supplied item type (default: '').
 * @param string $itemprop if supplied, outputs an itemprop (default: '').
 * @return string a string with the generated HTML.

### span($data = '', $class = '', $id = '', $style = '', $itemtype = '', $itemprop = '')

Create a span element.

You can use the $itemscope and $itemprop parameters to generate schema.org structured data elements.

 * @param string $data content of the span (default: '').
 * @param string $class class of this span (default: '').
 * @param string $id id of this span (default: '').
 * @param string $style optional style of this span (default: '').
 * @param string $itemtype if supplied, outputs an itemscope associated with the supplied item type (default: '').
 * @param string $itemprop if supplied, outputs an itemprop (default: '').
 * @return string a string with the generated HTML.

### div_open($class = '', $id = '', $style = '', $itemtype = '', $itemprop = '')

Open a div.

 * @param string $class class of this div (default: '').
 * @param string $id id of this div (default: '').
 * @param string $style optional style of this div (default: '').
 * @param string $itemtype if supplied, outputs an itemscope associated with the supplied item type (default: '').
 * @param string $itemprop if supplied, outputs an itemprop (default: '').
 * @return string a string with the generated HTML.

### span_open($class = '', $id = '', $style = '', $itemtype = '', $itemprop = '')

Open a span.

 * @param string $class class of this span (default: '').
 * @param string $id id of this span (default: '').
 * @param string $style optional style of this span (default: '').
 * @param string $itemtype if supplied, outputs an itemscope associated with the supplied item type (default: '').
 * @param string $itemprop if supplied, outputs an itemprop (default: '').
 * @return string a string with the generated HTML.

### div_close($num = 1)

Close a div.

 * @return string a string with the generated HTML.

### span_close($num = 1)

Close a span.

 * @return string a string with the generated HTML.

### hr()

Generate a hr tag.

 * @return string a string with the generated HTML.

### script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE)

Script

Generates a script inclusion of a JavaScript file.

Based on the CodeIgniters original Link Tag.

 * @author Isern Palaus (ipalaus@ipalaus.es), Viktor Rutberg (wishie@gmail.com)
 * @param mixed $src javascript sources or an array (default: '').
 * @param string $language language (default: 'javascript').
 * @param string $type meta type (default: 'text/javascript').
 * @param boolean $index_page should index_page be added to the javascript path (default: FALSE).
 * @return string
