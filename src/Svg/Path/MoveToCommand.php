<?php

namespace Svg\Path;

class MoveToCommand {

	private $x;
	private $y;

	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public function __toString() {
		return 'M' . implode(' ', array(
			$this->x, $this->y
		));
	}

}