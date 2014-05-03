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

use ArrayIterator;

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
class Builder {
	
	/**
	 * @var array
	 */
	private $commands;

	/**
	 * 
	 */
	public function __construct() {
		$this->commands = array();
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataMovetoCommands
	 * 
	 * @param  number|string $x
	 * @param  number|string $y
	 * @return self
	 */
	public function moveTo($x, $y) {
		$this->commands[] = new MoveAbsCommand($x, $y);
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
		$this->commands[] = new MoveRelCommand($dx, $dy);
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
		$this->commands[] = new LineAbsCommand($x, $y);
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $dx
	 * @param  number|string $dy
	 * @return self
	 */
	public function line($dx, $dy) {
		$this->commands[] = new LineRelCommand($dx, $dy);
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $x
	 * @return self
	 */
	public function horizontalLineTo($x) {
		$this->commands[] = new HorizontalLineAbsCommand($x);
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $dx
	 * @return self
	 */
	public function horizontalLine($dx) {
		$this->commands[] = new HorizontalLineRelCommand($dx);
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $y
	 * @return self
	 */
	public function verticalLineTo($y) {
		$this->commands[] = new VerticalLineAbsCommand($y);
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataLinetoCommands
	 * 
	 * @param  number|string $dx
	 * @return self
	 */
	public function verticalLine($dy) {
		$this->commands[] = new VerticalLineRelCommand($dy);
		return $this;
	}

	/**
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathDataCubicBezierCommands
	 *
	 * @param  number|string $x1
	 * @param  number|string $y1
	 * @param  number|string $x2
	 * @param  number|string $y2
	 * @param  number|string $x
	 * @param  number|string $y
	 * @return self
	 */
	public function curveTo($x1, $y1, $x2, $y2, $x, $y) {
		$this->commands[] = new CubicBezierCurveAbsCommand($x1, $y1, $x2, $y2, $x, $y);
		return $this;
	}

	public function curve($dx1, $dy1, $dx2, $dy2, $dx, $dy) {
		$this->commands[] = new CubicBezierCurveRelCommand($dx1, $dy1, $dx2, $dy2, $dx, $dy);
		return $this;
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
		$this->commands[] = new QuadraticCurveAbsCommand($cx, $cy, $x, $y);
		return $this;
	}

	/**
	 * @return CommandList
	 */
	public function commands() {
		return new ArrayIterator($this->commands);
	}

}