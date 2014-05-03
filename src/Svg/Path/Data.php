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
 * @see http://www.w3.org/TR/SVG11/paths.html#PathData
 *
 * @package    Svg
 * @subpackage Path
 * @author     Stuart Wakefield <me@stuartwakefield.co.uk>
 * @copyright  2014 Stuart Wakefield <me@stuartwakefield.co.uk>
 * @license    http://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link       http://github.com/stuartwakefield/php-svg
 */
class Data {
	
	/**
	 * @var CommandSet
	 */
	private $commands;

	/**
	 * 
	 */
	public function __construct() {
		$this->commands = new CommandSet;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataMovetoCommands
	 * 
	 * @param  number|string $x
	 * @param  number|string $y
	 * @return self
	 */
	public function moveTo($x, $y) {
		$this->commands->add(new MoveToCommand($x, $y));
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataMovetoCommands
	 * 
	 * @param  number|string $dx
	 * @param  number|string $dy
	 * @return self
	 */
	public function move($dx, $dy) {
		$this->commands->add(new MoveCommand($dx, $dy));
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $x
	 * @param  number|string $y
	 * @return self
	 */
	public function lineTo($x, $y) {
		$this->commands->add(new LineToCommand($x, $y));
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $dx
	 * @param  number|string $dy
	 * @return self
	 */
	public function line($dx, $dy) {
		$this->commands->add(new LineCommand($dx, $dy));
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $x
	 * @return self
	 */
	public function horizontalLineTo($x) {
		$this->commands->add(new HorizontalLineToCommand($x));
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataQuadraticBezierCommands
	 * 
	 * @param  number|string $cx
	 * @param  number|string $cy
	 * @param  number|string $x
	 * @param  number|string $y
	 * @return self
	 */
	public function quadraticCurveTo($cx, $cy, $x, $y) {
		$this->commands->add(new QuadraticCurveToCommand($cx, $cy, $x, $y));
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return (string) $this->commands;
	}

}