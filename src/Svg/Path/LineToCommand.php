<?php

namespace Svg\Path;

class LineToCommand {
	
	private $x;
	private $y;

	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public function __toString() {
		return 'L' . implode(' ', array(
			$this->x, $this->y
		));
	}

}