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
 * Definition of the interface for SVG path data commands.
 * 
 * @package    Svg
 * @subpackage Path
 * @author     Stuart Wakefield <me@stuartwakefield.co.uk>
 * @copyright  2014 Stuart Wakefield <me@stuartwakefield.co.uk>
 * @license    http://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link       http://github.com/stuartwakefield/php-svg
 */
interface Command {

	const UNKNOWN = 0;
	const CLOSE = 1;
	const MOVE_ABS = 2;
	const MOVE_REL = 3;
	const LINE_ABS = 4;
	const LINE_REL = 5;
	const CUBIC_CURVE_ABS = 6;
	const CUBIC_CURVE_REL = 7;
	const QUADRATIC_CURVE_ABS = 8;
	const QUADRATIC_CURVE_REL = 9;
	const ARC_ABS = 10;
	const ARC_REL = 11;
	const LINE_HORIZONTAL_ABS = 12;
	const LINE_HORIZONTAL_REL = 13;
	const LINE_VERTICAL_ABS = 14;
	const LINE_VERTICAL_REL = 15;

	/** 
	 * Returns the type of the current command.
	 *
	 * @return int
	 */
	public function type();

}