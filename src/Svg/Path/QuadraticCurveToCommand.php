<?php

namespace Svg\Path;

class QuadraticCurveToCommand {
	
	private $cx;
	private $cy;
	private $x;
	private $y;

	public function __construct($cx, $cy, $x, $y) {
		$this->cx = $cx;
		$this->cy = $cy;
		$this->x = $x;
		$this->y = $y;
	}

	public function __toString() {
		return 'Q' . implode(' ', array(
			$this->cx, $this->cy, $this->x, $this->y
		));
	}

}