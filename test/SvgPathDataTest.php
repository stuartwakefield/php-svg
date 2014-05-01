<?php

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

	}

	public function testHorizontalLineTo() {

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