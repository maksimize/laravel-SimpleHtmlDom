<?php

/**
 * Easy parssing markup languages.
 *
 * @package SimpleHtmlDom
 * @version 1.0
 * @author  Mahmoud Adel <amahmoudb@yahoo.com>
 * @link    https://github.com/EngMAF/laravel-SimpleHtmlDom
 */

require_once(__DIR__ . DS . 'libraries' . DS . 'simple_html_dom.php');

class SimpleHtmlDom {

	private $dom;
	private $array;

	/**
	 * take the file url and make a simpleHtmlDom object
	 *
	 * @param  string  $url
	 * @return object
	 */
	public static function url($url) 
	{
		$shd = new SimpleHtmlDom();
        $shd->dom = file_get_html($url);
        return $shd;
    }

	/**
	 * Get the array of node attribute value
	 *
	 * @param  string  $node
	 * @param  string  $attribute
	 * @return array
	 */
	public function get($nodes, $attribute = 'innertext')
	{
        foreach ($this->dom->find($nodes) as $node) {
            $this->array[] = trim( $node->$attribute );
        }
        return $this;
	}

	/**
	 * Get the first elemrent of array of node attribute value
	 *
	 * @return string
	 */
	public function first()
	{
		if(empty($this->array))
			return null;
		
		reset($this->array);
		return current($this->array);
	}
}
