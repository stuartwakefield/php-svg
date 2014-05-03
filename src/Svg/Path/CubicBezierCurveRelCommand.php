<?php

namespace Svg\Path;

class CubicBezierCurveRelCommand implements Command {
	
	private $type = Command::CUBIC_CURVE_REL;
	private $dx1;
	private $dy1;
	private $dx2;
	private $dy2;
	private $dx;
	private $dy;

	public function __construct($dx1, $dy1, $dx2, $dy2, $dx, $dy) {
		$this->dx1 = $dx1;
		$this->dy1 = $dy1;
		$this->dx2 = $dx2;
		$this->dy2 = $dy2;
		$this->dx = $dx;
		$this->dy = $dy;
	}

	public function type() {
		return $this->type;
	}

	public function dx1() {
		return $this->dx1;
	}

	public function dy1() {
		return $this->dy1;
	}

	public function dx2() {
		return $this->dx2;
	}

	public function dy2() {
		return $this->dy2;
	}

	public function dx() {
		return $this->dx;
	}

	public function dy() {
		return $this->dy;
	}

}