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
class QuadraticCurveAbsCommand implements Command {
	
	private $type = Command::QUADRATIC_CURVE_ABS;

	/**
	 * @var number|string
	 */
	private $cx;

	/**
	 * @var number|string
	 */
	private $cy;

	/**
	 * @var number|string
	 */
	private $x;

	/**
	 * @var number|string
	 */
	private $y;

	/**
	 * @param number|string $cx
	 * @param number|string $cy
	 * @param number|string $x
	 * @param number|string $y
	 */
	public function __construct($cx, $cy, $x, $y) {
		$this->cx = $cx;
		$this->cy = $cy;
		$this->x = $x;
		$this->y = $y;
	}

	public function type() {
		return $this->type;
	}

	public function cx() {
		return $this->cx;
	}

	public function cy() {
		return $this->cy;
	}

	public function x() {
		return $this->x;
	}

	public function y() {
		return $this->y;
	}

}