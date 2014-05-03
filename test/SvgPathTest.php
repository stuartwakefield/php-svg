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

/**
 *
 * 
 * @author     Stuart Wakefield <me@stuartwakefield.co.uk>
 * @copyright  2014 Stuart Wakefield <me@stuartwakefield.co.uk>
 * @license    http://opensource.org/licenses/MIT  The MIT License (MIT)
 * @link       http://github.com/stuartwakefield/php-svg
 */
class SvgPathTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
		$this->renderer = new Svg\Path\CommandRenderer;
	}

	/**
	 *
	 */
	public function testMoveTo() {
		$path = new Svg\Path\Builder;
		$path->moveTo(0, 0);
		$this->assertEquals('M0 0', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testMove() {
		$path = new Svg\Path\Builder;
		$path->move(10, -10);
		$this->assertEquals('m10 -10', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testLineTo() {
		$path = new Svg\Path\Builder;
		$path->lineTo(10, 10);
		$this->assertEquals('L10 10', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testLine() {
		$path = new Svg\Path\Builder;
		$path->line(-20, 100);
		$this->assertEquals('l-20 100', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testHorizontalLineTo() {
		$path = new Svg\Path\Builder;
		$path->horizontalLineTo(320);
		$this->assertEquals('H320', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testHorizontalLine() {
		$path = new Svg\Path\Builder;
		$path->horizontalLine(24);
		$this->assertEquals('h24', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testVerticalLineTo() {
		$path = new Svg\Path\Builder;
		$path->verticalLineTo(678);
		$this->assertEquals('V678', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testVerticalLine() {
		$path = new Svg\Path\Builder;
		$path->verticalLine(-42);
		$this->assertEquals('v-42', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testCubicCurveTo() {
		$path = new Svg\Path\Builder;
		$path->curveTo(123, 32, 142, 23, 31, 123);
		$this->assertEquals('C123 32 142 23 31 123', $this->renderer->render($path->commands()));
	}

	/**
	 *
	 */
	public function testCubicCurve() {
		$path = new Svg\Path\Builder;
		$path->curve(32, 34, 56, 45, 123, 234);
		$this->assertEquals('c32 34 56 45 123 234', $this->renderer->render($path->commands()));
	}

	public function testSmoothCubicCurveTo() {

	}

	public function testSmoothCubicCurve() {

	}

	public function testQuadraticCurveTo() {
		$path = new Svg\Path\Builder;
		$path->quadraticCurveTo(20, 20, 40, 10);
		$this->assertEquals('Q20 20 40 10', $this->renderer->render($path->commands()));
	}

	public function testQuadraticCurve() {

	}

	public function testSmoothQuadraticCurveTo() {

	}

	public function testSmoothQuadraticCurve() {

	}

	public function testArcTo() {

	}

	public function testArc() {

	}

}