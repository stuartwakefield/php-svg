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

class SvgPathDataTest extends PHPUnit_Framework_TestCase {
	
	public function testMoveTo() {
		$path = new Svg\Path\Data;
		$path->moveTo(0, 0);
		$this->assertEquals('M0 0', (string) $path);
	}

	public function testMove() {
		$path = new Svg\Path\Data;
		$path->move(10, -10);
		$this->assertEquals('m10 -10', (string) $path);
	}

	public function testLineTo() {
		$path = new Svg\Path\Data;
		$path->lineTo(10, 10);
		$this->assertEquals('L10 10', (string) $path);
	}

	public function testLine() {
		$path = new Svg\Path\Data;
		$path->line(-20, 100);
		$this->assertEquals('l-20 100', (string) $path);
	}

	public function testHorizontalLineTo() {
		$path = new Svg\Path\Data;
		$path->horizontalLineTo(320);
		$this->assertEquals('H320', (string) $path);
	}

	public function testHorizontalLine() {

	}

	public function testVerticalLineTo() {

	}

	public function testVerticalLine() {

	}

	public function testCubicCurveTo() {

	}

	public function testCubicCurve() {

	}

	public function testSmoothCubicCurveTo() {

	}

	public function testSmoothCubicCurve() {

	}

	public function testQuadraticCurveTo() {
		$path = new Svg\Path\Data;
		$path->quadraticCurveTo(20, 20, 40, 10);
		$this->assertEquals('Q20 20 40 10', (string) $path);
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