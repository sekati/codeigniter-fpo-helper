<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter FPO Placeholder Image Helper
 *
 * @package		Sekati
 * @author		Jason M Horwitz
 * @copyright	Copyright (c) 2012, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.0.0
 *
 * @usage 		$autoload['helper'] = array('placeholder');
 * @example		placeholder( 640, 480, true, 'ffffff', 'ff00ff' );				
 * 				placekitten( 640, 480 );
 *
 */

// ------------------------------------------------------------------------
// PLACEHOLDER HELPERS

/**
 * Get either a placehold.it URL or complete image tag of specified size & color.
 *
 * @param int 		$width
 * @param int 		$height
 * @param boolean 	$img True to return a complete IMG tag False for just the URL
 * @param string 	$fgcolor 
 * @param string 	$bgcolor
 * @return 			String containing either just a URL or a complete image tag
 */
if ( ! function_exists('placeholder'))
{ 
	function placeholder( $width = 320, $height = 240, $img = true, $fgcolor = '969696', $bgcolor = 'cccccc' )
	{
		$color = '/' . $bgcolor . '/' . $fgcolor;
		$url = 'http://placehold.it/' . $width . 'x' . $height . $color;
		if ( $img )
		{
			$url = '<img src="' . $url . '" alt="' . $width . 'x' . $height .' placeholder" />';
		}
		return $url;
	}
} 

/**
 * Get either a placekitten.com URL or complete image tag of specified size & color.
 *
 * @param int 		$width
 * @param int 		$height
 * @param boolean 	$img True to return a complete IMG tag False for just the URL
 * @return 			String containing either just a URL or a complete image tag
 */
if ( ! function_exists('placekitten'))
{ 
	function placekitten( $width = 320, $height = 240, $img = true )
	{
		$url = 'http://placekitten.com/' . $width . '/' . $height;
		if ( $img )
		{
			$url = '<img src="' . $url . '" alt="' . $width . 'x' . $height .' placekitten" />';
		}
		return $url;
	}
} 
 
/* End of file placeholder_helper.php */
/* Location: application/helpers/placeholder_helper.php */
