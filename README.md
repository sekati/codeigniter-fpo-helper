
CodeIgniter Placeholder Image Helper
============================
A small [CodeIgniter](http://codeigniter.com) helper library for working with the various Placeholder Image API's such as [placehold.it](http://placehold.it), [placekitten](http://placekitten.com), etc.


Installation
-------------------------------------

1. Copy `placeholder_helper.php` to your `application/helpers` folder.
2. Autoload the helper `$autoload['helper'] = array('placeholder');`.
3. Employ helper functions as needed.


Usage
-------------------------------------

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
 
	<?=placeholder( 640, 480 )?>
	

	/**
	 * Get either a placekitten.com URL or complete image tag of specified size & color.
	 *
	 * @param int 		$width
	 * @param int 		$height
	 * @param boolean 	$img True to return a complete IMG tag False for just the URL	 
	 * @return 			String containing either just a URL or a complete image tag
	 */

	<?=placekitten( 320, 240 )?>

  	
License
-------------------------------------

Copyright © 2012 Jason M Horwitz, Sekati LLC. All Rights Reserved.

Released under the MIT License: [http://www.opensource.org/licenses/mit-license.php](http://www.opensource.org/licenses/mit-license.php)

	The MIT License

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and 
	associated documentation files (the “Software”), to deal in the Software without restriction, 
	including without limitation the rights to use, copy, modify, merge, publish, distribute, 
	sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is 
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or 
	substantial portions of the Software.

	THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING 
	BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
	DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.	
	