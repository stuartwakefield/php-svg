<?php

/* PHP Scalable Vector Graphics
 * 
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 Stuart Wakefield
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Svg\Path;

/**
 *
 * 
 * @package    Svg
 * @subpackage Path
 * @author     Stuart Wakefield <me@stuartwakefield.co.uk>
 * @copyright  2014 Stuart Wakefield <me@stuartwakefield.co.uk>
 * @license    http://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link       http://github.com/stuartwakefield/php-svg
 */
class HorizontalLineToCommand implements Command {

	/**
	 * @var number|string
	 */
	private $x;

	/**
	 * @param number|string $x
	 */
	public function __construct($x) {
		$this->x = $x;
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return CommandUtil::toString('H', array($this->x));
	}

}